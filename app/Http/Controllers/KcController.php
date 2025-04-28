<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;

class KcController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:kepala_cabang');
    }

    // Halaman dashboard kepala cabang (menampilkan data cabang mereka)
    public function dashboard()
    {
        $user = auth()->user();
        $branch_id = $user->branch_id;

        // Menghitung jumlah customer berdasarkan status untuk cabang ini
        $pusatData = Customer::where('branch_id', $branch_id)->whereNull('salesman_id')->count(); 
        $followUpSales = Customer::where('branch_id', $branch_id)->where('progress', 'follow_up')->count();
        $savedBySales = Customer::where('branch_id', $branch_id)->whereNotNull('salesman_id')->where('progress', '!=', 'follow_up')->count();

        return view('kc.dashboard', compact('pusatData', 'followUpSales', 'savedBySales'));
    }

    // Laporan untuk kepala cabang: Menampilkan customer yang di-follow up
    public function laporan()
    {
        $user = auth()->user();
        $branch_id = $user->branch_id; 

        // Mengambil data customer yang sudah di-follow up untuk cabang ini
        $followUpCustomers = Customer::where('branch_id', $branch_id)->where('status', 'follow_up')->get();

        return view('kc.laporan.index', compact('followUpCustomers'));
    }

    // Ekspor customer yang sudah di-follow up ke Excel
    public function exportFollowUpCustomers()
    {
        $user = auth()->user();
        $branch_id = $user->branch_id;

        // Menggunakan CustomerExport untuk mengekspor data yang sudah di-follow up
        return Excel::download(new CustomerExport, 'laporan_follow_up_customers.xlsx');
    }

    // Halaman untuk mengelola akun sales
    public function indexAkun()
    {
        $user = auth()->user();
        $branch_id = $user->branch_id;

        // Mengambil semua data sales di cabang ini
        $sales = User::where('branch_id', $branch_id)->where('role', 'salesman')->get();
        return view('kc.akun.index', compact('sales'));
    }

    // Halaman untuk melihat detail akun sales
    public function showAkun($id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik cabang yang sama
        if ($sales->branch_id !== auth()->user()->branch_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('kc.akun.show', compact('sales'));
    }

    // Halaman untuk mengedit akun sales
    public function editAkun($id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik cabang yang sama
        if ($sales->branch_id !== auth()->user()->branch_id) {
            abort(403, 'Unauthorized action.');
        }

        return view('kc.akun.edit', compact('sales'));
    }

    // Menyimpan perubahan pada akun sales
    public function updateAkun(Request $request, $id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik cabang yang sama
        if ($sales->branch_id !== auth()->user()->branch_id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username,' . $id,
            'email' => 'required|email|unique:users,email,' . $id,
            'password' => 'nullable|string|min:6|confirmed',
            'status' => 'required|in:aktif,non-aktif',
        ]);

        // Update data akun sales
        $sales->update([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => $request->password ? bcrypt($request->password) : $sales->password,
            'status' => $request->status,
        ]);

        return redirect()->route('kc.akun.index')->with('success', 'Akun Sales berhasil diperbarui');
    }
}
