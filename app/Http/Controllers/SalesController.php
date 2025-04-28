<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;

class SalesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:salesman');
    }

    // Halaman dashboard sales (menampilkan tabel semua customer sesuai dengan cabang sales)
    public function dashboard()
    {
        $user = auth()->user();
        $branch_id = $user->branch_id;

        // Mengambil semua customer yang sesuai dengan cabang sales yang login
        // Data bebas (customer yang belum di-follow up)
        $freeData = Customer::where('branch_id', $branch_id)
            ->whereNull('salesman_id')
            ->get();

        // Mengambil data customer yang sudah di-follow up
        $followUpData = Customer::where('branch_id', $branch_id)
            ->whereNotNull('salesman_id')
            ->where('status', 'follow_up')
            ->get();

        return view('sales.dashboard', compact('freeData', 'followUpData'));
    }

    // Halaman untuk melihat customer yang sudah disimpan untuk follow up
    public function followUp()
    {
        $user = auth()->user();
        $salesman_id = $user->id;

        // Mengambil semua customer yang sudah disimpan oleh salesman untuk follow up
        $followUpCustomers = Customer::where('salesman_id', $salesman_id)
            ->where('status', 'follow_up')
            ->get();

        return view('sales.followup.index', compact('followUpCustomers'));
    }

    // Ekspor laporan sales (semua customer yang ditangani oleh salesman)
    public function exportSalesReport()
    {
        $user = auth()->user();
        $salesman_id = $user->id;

        // Menggunakan CustomerExport untuk mengekspor laporan sales
        return Excel::download(new CustomerExport($salesman_id), 'laporan_sales.xlsx');
    }

    // Halaman laporan untuk menampilkan semua customer yang dikelola oleh salesman
    public function indexLaporan()
    {
        $user = auth()->user();
        $salesman_id = $user->id;

        // Mengambil semua customer yang ditangani oleh salesman
        $customers = Customer::where('salesman_id', $salesman_id)->get();

        return view('sales.laporan.index', compact('customers'));
    }

    // Halaman untuk mengedit data customer yang sudah disimpan
    public function editFollowUp($id)
    {
        $customer = Customer::findOrFail($id);
        
        // Pastikan customer ini dikelola oleh salesman yang sedang login
        if ($customer->salesman_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('sales.followup.edit', compact('customer'));
    }

    // Menyimpan perubahan follow up pada customer
    public function updateFollowUp(Request $request, $id)
    {
        $customer = Customer::findOrFail($id);
        
        // Pastikan customer ini dikelola oleh salesman yang sedang login
        if ($customer->salesman_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        $request->validate([
            'status' => 'required|in:follow_up,saved',
            'progress' => 'nullable|string',
        ]);

        // Update data customer
        $customer->update([
            'status' => $request->status,
            'progress' => $request->progress,
        ]);

        return redirect()->route('sales.followup.index')->with('success', 'Customer Follow Up berhasil diperbarui');
    }

    // Menampilkan detail customer
    public function show($id)
    {
        $customer = Customer::findOrFail($id);
        
        // Pastikan customer ini dikelola oleh salesman yang sedang login
        if ($customer->salesman_id !== auth()->user()->id) {
            abort(403, 'Unauthorized action.');
        }

        return view('sales.show', compact('customer'));
    }
}
