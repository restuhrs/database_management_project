<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DashboardAdmin extends Model
{
    use HasFactory;

    protected $table = 'dashboard_admins';
    protected $fillable = [
        'cabang', 'nama', 'follow_up',
    ];
}
