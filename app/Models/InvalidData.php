<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class InvalidData extends Model
{
    protected $table = 'invalid_data';
    protected $fillable = [
        'cabang', 'nama_sales', 'no_hp_1', 'no_hp_2', 'sumber_data',
        'model_mobil', 'jenis_pelanggan',
    ];
}
