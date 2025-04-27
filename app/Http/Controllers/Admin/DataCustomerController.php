<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\BigDataAdmin;
use Illuminate\Http\Request;

class DataCustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $big_data_admins = BigDataAdmin::all();
        return view('layouts.admin.data_cust', compact('big_data_admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'cabang' => 'required|string',
            'salesman' => 'required|string|max:255',
            'sumber_data' => 'required|string',
            'nama' => 'required|string',
            'kota' => 'required|string',
            'jenis_kendaraan'=> 'required|string',
            'progress' => 'required|string',
            'alasan' => 'required|string|max:30',
            'alamat' => 'required|string',
            'kelurahan' => 'required|string',
            'kecamatan' => 'required|string',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|in:L,P',
            'tipe_pelanggan' => 'required|string',
            'tenor' => 'required|string',
            'tgl_gatepass' => 'required|date',
            'no_telp' => 'required|string'
        ]);

        BigDataAdmin::create($validated);

        return redirect()->back()->with('success', 'Data berhasil ditambahkan');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        // Validasi inputan dari form
        $validated = $request->validate([
            'cabang' => 'required|string|max:255',
            'sales' => 'required|string|max:255',
            'sumber_data' => 'required|string|max:255',
            'nama' => 'required|string|max:255',
            'kota' => 'required|string|max:255',
            'jenis_kendaraan' => 'required|string|max:255',
            'progress' => 'required|string|max:255',
            'alasan' => 'required|string|max:255',
            'alamat' => 'required|string|max:255',
            'kelurahan' => 'required|string|max:255',
            'kecamatan' => 'required|string|max:255',
            'tanggal_lahir' => 'required|date',
            'gender' => 'required|string|max:1',
            'tipe_pelanggan' => 'required|string|max:255',
            'tenor' => 'required|string|max:255',
            'tgl_gatepass' => 'required|date',
            'no_telp' => 'required|numeric',
        ]);

        // Cari data berdasarkan ID
        $bigData = BigDataAdmin::findOrFail($id);

        // Update data
        $bigData->update($validated);

        // Redirect kembali dengan pesan sukses
        return redirect()->route('admin.data_cust')->with('success', 'Data berhasil diupdate.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        BigDataAdmin::destroy($id);
        return redirect()->back()->with('success', 'Data berhasil dihapus.');
    }
}
