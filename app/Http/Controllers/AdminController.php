<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Models\Branch;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\CustomerExport;
use App\Imports\CustomersImport;

class AdminController extends Controller
{
    // Pastikan hanya admin yang bisa mengakses halaman ini
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('role:admin');
    }

    // Halaman dashboard admin
    public function dashboard()
    {
        $salesmen = User::where('role', 'salesman')->get();
        
        $pusatData = Customer::count();
        $followUpSales = Customer::where('progress', 'follow_up')->count();
        $savedBySales = Customer::where('salesman_id', '!=', null)->count();
        
        return view('admin.dashboard', compact('salesmen', 'pusatData', 'followUpSales', 'savedBySales'));
    }

    // Halaman laporan (Laporan customer yang di-follow up oleh sales)
    public function laporan()
    {
        // Ambil data customer yang sudah di-follow up oleh sales
        $followUpCustomers = Customer::where('progress', 'follow_up')->get();

        return view('admin.laporan.index', compact('followUpCustomers'));
    }

    // Ekspor data customer yang sudah di-follow up ke Excel
    public function exportFollowUpCustomers()
    {
        // Menggunakan CustomerExport untuk mengekspor data
        return Excel::download(new CustomerExport, 'laporan_follow_up_customers.xlsx');
    }

    // Halaman untuk mengelola akun sales
    public function indexAkun()
    {
        // Ambil semua akun user dengan role yang sesuai (misalnya 'salesman')
        $users = User::all();
        
        return view('admin.akun.index', compact('users'));
    }

    // Halaman untuk membuat akun sales
    public function createAkun()
    {
        // Ambil data cabang dan status untuk digunakan dalam form
        $branches = Branch::all();
        $roles = User::ROLE_OPTIONS;
        $statuses = ['aktif', 'non-aktif'];

        return view('admin.akun.create', compact('branches', 'roles', 'statuses'));
    }

    // Menyimpan akun sales baru
    public function storeAkun(Request $request)
    {
        // Validasi input
        $request->validate([
            'name' => 'required|string|max:255',
            'username' => 'required|string|max:255|unique:users,username',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6|confirmed',
            'role' => 'required|in:admin,kepala_cabang,supervisor,salesman',
            'status' => 'required|in:aktif,non-aktif',
            'branch_id' => 'nullable|exists:branches,id', // Jika admin tidak terikat dengan cabang
        ]);

        // Membuat user baru dengan username dan status
        User::create([
            'name' => $request->name,
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => $request->role,
            'status' => $request->status,
            'branch_id' => $request->role === 'admin' ? null : $request->branch_id, // Admin tidak terikat cabang
        ]);

        return redirect()->route('admin.akun.index')->with('success', 'Akun Sales berhasil dibuat');
    }

    // Fungsi untuk menghapus akun
    public function destroyAkun($id)
    {
        // Cari akun yang akan dihapus
        $user = User::findOrFail($id);

        // Pastikan hanya admin yang dapat menghapus akun
        if ($user->role === 'admin' && auth()->user()->role !== 'admin') {
            return redirect()->route('admin.akun.index')->with('error', 'Anda tidak dapat menghapus akun admin.');
        }

        // Hapus akun
        $user->delete();

        return redirect()->route('admin.akun.index')->with('success', 'Akun berhasil dihapus.');
    }

    // Halaman untuk mengelola data customer
    public function indexCust()
    {
        // Ambil semua customer
        $customers = Customer::all();

        // Menyaring berdasarkan progress (status)
        $validCustomers = Customer::where('progress', '!=', 'tidak valid')->get();
        $invalidCustomers = Customer::where('progress', 'tidak valid')->get();

        return view('admin.cust.index', compact('customers', 'validCustomers', 'invalidCustomers'));
    }

    // Halaman untuk membuat customer
    public function createCust()
    {
        return view('admin.cust.create');
    }

    // Menyimpan customer baru
    public function storeCust(Request $request)
    {
        $request->validate([
            'nama' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'nomor_hp_1' => 'required|string',
            'nomor_hp_2' => 'nullable|string',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'jenis_kelamin' => 'required|in:L,P',
            'tipe_pelanggan' => 'required|string',
            'jenis_pelanggan' => 'required|string',
            'model_mobil' => 'required|string',
            'nomor_rangka' => 'required|string',
            'pekerjaan' => 'nullable|string',
            'tenor' => 'nullable|string',
            'tanggal_gatepass' => 'nullable|date',
            'branch_id' => 'required|exists:branches,id',
            'salesman_id' => 'required|exists:users,id',
            'sumber_data' => 'nullable|string',
            'progress' => 'nullable|string',
            'alasan' => 'nullable|string',
        ]);

        Customer::create([
            'nama' => $request->nama,
            'alamat' => $request->alamat,
            'nomor_hp_1' => $request->nomor_hp_1,
            'nomor_hp_2' => $request->nomor_hp_2,
            'kelurahan' => $request->kelurahan,
            'kecamatan' => $request->kecamatan,
            'kota' => $request->kota,
            'tanggal_lahir' => $request->tanggal_lahir,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tipe_pelanggan' => $request->tipe_pelanggan,
            'jenis_pelanggan' => $request->jenis_pelanggan,
            'model_mobil' => $request->model_mobil,
            'nomor_rangka' => $request->nomor_rangka,
            'pekerjaan' => $request->pekerjaan,
            'tenor' => $request->tenor,
            'tanggal_gatepass' => $request->tanggal_gatepass,
            'branch_id' => $request->branch_id,
            'salesman_id' => $request->salesman_id,
            'sumber_data' => $request->sumber_data,
            'progress' => $request->progress,
            'alasan' => $request->alasan,
        ]);

        return redirect()->route('admin.cust.index')->with('success', 'Customer berhasil ditambahkan');
    }

    // Fungsi untuk mengimpor customer dari Excel
    public function importCust(Request $request)
    {
        // Validasi file yang diupload
        $request->validate([
            'file' => 'required|mimes:xlsx,xls',
        ]);

        // Proses impor file
        Excel::import(new CustomersImport, $request->file('file'));

        return redirect()->route('admin.cust.index')->with('success', 'Customer berhasil diimpor');
    }
}
