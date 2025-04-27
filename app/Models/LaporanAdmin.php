<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LaporanAdmin extends Model
{
    use HasFactory;

    protected $table = 'laporan_admins';
    protected $fillable = [
        'cabang', 'nama_sales', 'total_follow_up', 'total_kontak_valid', 'total_kontak_tdk_valid',
        'total_pending','total_process', 'total_closing',
    ];
}
