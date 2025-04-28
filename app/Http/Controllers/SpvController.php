<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;

class SpvController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:supervisor');
    }

    // Halaman dashboard supervisor (menampilkan data sales yang ada di bawahnya)
    public function dashboard()
    {
        $user = auth()->user();
        $supervisor_id = $user->id;

        // Ambil semua sales yang berada di bawah supervisor ini
        $sales = User::where('supervisor_id', $supervisor_id)->where('role', 'salesman')->get();

        // Menghitung jumlah customer berdasarkan status untuk tim sales supervisor
        $pusatData = Customer::whereIn('salesman_id', $sales->pluck('id'))->whereNull('salesman_id')->count();
        $followUpSales = Customer::whereIn('salesman_id', $sales->pluck('id'))->where('progress', 'follow_up')->count();
        $savedBySales = Customer::whereIn('salesman_id', $sales->pluck('id'))->whereNotNull('salesman_id')->where('progress', '!=', 'follow_up')->count();

        return view('spv.dashboard', compact('pusatData', 'followUpSales', 'savedBySales'));
    }

    // Laporan untuk supervisor: Menampilkan customer yang sudah di-follow up oleh tim sales di bawah supervisor
    public function laporan()
    {
        $user = auth()->user();
        $supervisor_id = $user->id;

        // Ambil data customer yang sudah di-follow up oleh sales yang ada di bawah supervisor ini
        $sales = User::where('supervisor_id', $supervisor_id)->where('role', 'salesman')->get();
        $followUpCustomers = Customer::whereIn('salesman_id', $sales->pluck('id'))->where('status', 'follow_up')->get();

        return view('spv.laporan.index', compact('followUpCustomers'));
    }

    // Ekspor customer yang sudah di-follow up oleh sales yang ada di bawah supervisor ke Excel
    public function exportFollowUpCustomers()
    {
        $user = auth()->user();
        $supervisor_id = $user->id;

        // Menggunakan CustomerExport untuk mengekspor data yang sudah di-follow up oleh sales yang dikelola supervisor
        $sales = User::where('supervisor_id', $supervisor_id)->where('role', 'salesman')->get();
        return Excel::download(new CustomerExport($sales->pluck('id')), 'laporan_follow_up_customers.xlsx');
    }

    // Halaman untuk mengelola akun sales yang ada di bawah supervisor
    public function indexAkun()
    {
        $user = auth()->user();
        $supervisor_id = $user->id;

        // Mengambil semua data sales yang berada di bawah supervisor ini
        $sales = User::where('supervisor_id', $supervisor_id)->where('role', 'salesman')->get();
        return view('spv.akun.index', compact('sales'));
    }

    // Halaman untuk melihat detail akun sales
    public function showAkun($id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik supervisor yang sama
        if ($sales->supervisor_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('spv.akun.show', compact('sales'));
    }

    // Halaman untuk mengedit akun sales
    public function editAkun($id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik supervisor yang sama
        if ($sales->supervisor_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('spv.akun.edit', compact('sales'));
    }

    // Menyimpan perubahan pada akun sales
    public function updateAkun(Request $request, $id)
    {
        $sales = User::findOrFail($id);

        // Pastikan akun sales yang ditampilkan adalah milik supervisor yang sama
        if ($sales->supervisor_id !== auth()->user()->id) {
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

        return redirect()->route('spv.akun.index')->with('success', 'Akun Sales berhasil diperbarui');
    }
}
