<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;

class MiddlewareServiceProvider extends ServiceProvider
{
    public function boot()
    {
        // Daftarkan middleware 'branch'
        Route::aliasMiddleware('branch', \App\Http\Middleware\BranchMiddleware::class);
    }

    public function register()
    {
        // Pendaftaran layanan jika diperlukan
    }
}
