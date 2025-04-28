<?php

namespace App\Exports;

use App\Models\Customer;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class CustomerExport implements FromCollection, WithHeadings, WithMapping
{
    public function collection()
    {
        return Customer::with(['branch', 'salesman'])->get();
    }

    public function map($customer): array
    {
        return [
            $customer->nama,
            $customer->alamat,
            $customer->nomor_hp_1,
            $customer->nomor_hp_2,
            $customer->kelurahan,
            $customer->kecamatan,
            $customer->kota,
            $customer->tanggal_lahir,
            $customer->jenis_kelamin,
            $customer->tipe_pelanggan,
            $customer->jenis_pelanggan,
            $customer->model_mobil,
            $customer->nomor_rangka,
            $customer->pekerjaan,
            $customer->tenor,
            $customer->tanggal_gatepass,
            $customer->branch?->name ?? '-',
            $customer->salesman?->name ?? '-',
            $customer->sumber_data,
            $customer->progress,
            $customer->alasan,
        ];
    }

    public function headings(): array
    {
        return [
            'Nama', 'Alamat', 'Nomor HP 1', 'Nomor HP 2', 'Kelurahan', 'Kecamatan',
            'Kota', 'Tanggal Lahir', 'Jenis Kelamin', 'Tipe Pelanggan', 'Jenis Pelanggan',
            'Model Mobil', 'Nomor Rangka', 'Pekerjaan', 'Tenor', 'Tanggal Gatepass',
            'Cabang', 'Salesman', 'Sumber Data', 'Progress', 'Alasan'
        ];
    }
}
