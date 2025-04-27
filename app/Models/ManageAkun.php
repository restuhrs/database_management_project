<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ManageAkun extends Model
{
    use HasFactory;

    protected $table = 'users';
    protected $fillable = [
        'cabang', 'username', 'nama', 'role', 'status',
    ];
}
