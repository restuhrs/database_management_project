<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'users';

    // Kolom yang boleh diisi
    protected $fillable = [
        'email', 'password', 'role', 'branch_id', 'status', 'supervisor_id'
    ];

    // Relasi dengan Branch (Admin tidak terkait cabang)
    public function branch()
    {
        return $this->belongsTo(Branch::class);
    }

    // Relasi dengan Customer (hanya jika role adalah salesman)
    public function customers()
    {
        return $this->hasMany(Customer::class, 'salesman_id');
    }

    // Relasi untuk supervisor yang mengelola salesman
    public function supervisor()
    {
        return $this->belongsTo(User::class, 'supervisor_id'); // Relasi dengan supervisor
    }

    // Relasi untuk salesman yang dikelola oleh supervisor
    public function sales()
    {
        return $this->hasMany(User::class, 'supervisor_id'); // Relasi dengan banyak salesman
    }

    // Pemeriksaan apakah user adalah admin
    public function isAdmin()
    {
        return $this->role === 'admin';
    }

    // Pemeriksaan apakah user adalah kepala cabang
    public function isKepalaCabang()
    {
        return $this->role === 'kepala_cabang';
    }

    // Pemeriksaan apakah user adalah supervisor
    public function isSupervisor()
    {
        return $this->role === 'supervisor';
    }

    // Pemeriksaan apakah user adalah salesman
    public function isSalesman()
    {
        return $this->role === 'salesman';
    }

    // Pemeriksaan apakah user statusnya aktif
    public function isAktif()
    {
        return $this->status === 'aktif';
    }

    // Pemeriksaan apakah user statusnya non-aktif
    public function isNonAktif()
    {
        return $this->status === 'non-aktif';
    }

    /**
     * Mengambil data Sales yang dikelola oleh supervisor ini
     */
    public function getSalesFromSupervisor()
    {
        return $this->sales()->where('role', 'salesman')->get();
    }
}
