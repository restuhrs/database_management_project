<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Branch extends Model
{
    use HasFactory;

    protected $fillable = ['id', 'name'];
    public $incrementing = false;
    protected $keyType = 'string';

    /**
     * Relasi ke tabel Customer
     */
    public function customers(): HasMany
    {
        return $this->hasMany(Customer::class, 'branch_id', 'id');
    }

    /**
     * Relasi ke tabel User (Salesman, Supervisor, Kepala Cabang)
     */
    public function users(): HasMany
    {
        return $this->hasMany(User::class, 'branch_id', 'id');
    }
}
