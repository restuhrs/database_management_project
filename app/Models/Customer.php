<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    protected $table = 'customers';
    protected $primaryKey = 'id_customer'; 
    public $incrementing = true; 

    protected $fillable = [
        'nama', 'alamat', 'nomor_hp_1', 'nomor_hp_2', 'kelurahan', 'kecamatan',
        'kota', 'tanggal_lahir', 'jenis_kelamin', 'tipe_pelanggan', 'jenis_pelanggan',
        'model_mobil', 'nomor_rangka', 'pekerjaan', 'tenor', 'tanggal_gatepass',
        'branch_id', 'salesman_id', 'sumber_data', 'progress', 'alasan'
    ];

    /**
     * Relasi dengan Branch (Cabang)
     */
    public function branch()
    {
        return $this->belongsTo(Branch::class, 'branch_id', 'id');
    }

    /**
     * Relasi dengan User (Salesman)
     */
    public function salesman()
    {
        return $this->belongsTo(User::class, 'salesman_id', 'id'); 
    }
}
