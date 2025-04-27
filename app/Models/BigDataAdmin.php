<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class BigDataAdmin extends Model
{
    use HasFactory;

    protected $table = 'big_data_admins';
    protected $fillable = [
        'cabang', 'salesman', 'sumber_data', 'nama', 'kota', 'jenis_kendaraan', 'progress', 'alasan',
        'alamat', 'kelurahan', 'kecamatan', 'tanggal_lahir', 'gender',
        'tipe_pelanggan', 'tenor', 'tgl_gatepass', 'no_telp'
    ];
}
