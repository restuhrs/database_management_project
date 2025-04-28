<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SalesController;
use App\Http\Controllers\SpvController;
use App\Http\Controllers\KcController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Auth;

// Halaman awal akan mengarah ke halaman login
Route::get('/', [AuthController::class, 'login'])->name('login');

// Proses login dengan metode POST
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.action');

// Proses logout dengan metode POST
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Dashboard setelah login
Route::middleware(['auth'])->get('/dashboard', [AuthController::class, 'dashboard'])->name('dashboard');

// Sales routes (Salesman hanya bisa mengakses dashboard mereka, followup, dan laporan)
Route::middleware(['auth', 'role:salesman'])->group(function () {
    Route::get('/sales/dashboard', [SalesController::class, 'dashboard'])->name('sales.dashboard');
    Route::get('/sales/laporan', [SalesController::class, 'indexLaporan'])->name('sales.laporan.index');
    Route::get('/sales/ekspor-laporan', [SalesController::class, 'exportSalesReport'])->name('sales.export');
    Route::get('/sales/followup', [SalesController::class, 'followUp'])->name('sales.followup.index');
    Route::get('/sales/followup/{id}/edit', [SalesController::class, 'editFollowUp'])->name('sales.followup.edit');
    Route::put('/sales/followup/{id}', [SalesController::class, 'updateFollowUp'])->name('sales.followup.update');
    Route::get('/sales/customer/{id}', [SalesController::class, 'show'])->name('sales.show');
});

// Supervisor routes
Route::middleware(['auth', 'role:supervisor'])->group(function () {
    Route::get('/spv/dashboard', [SpvController::class, 'dashboard'])->name('spv.dashboard');
    Route::get('/spv/laporan', [SpvController::class, 'laporan'])->name('spv.laporan.index');
    Route::get('/spv/ekspor-laporan', [SpvController::class, 'exportFollowUpCustomers'])->name('spv.export');
    Route::get('/spv/akun', [SpvController::class, 'indexAkun'])->name('spv.akun.index');
    Route::get('/spv/akun/{id}', [SpvController::class, 'showAkun'])->name('spv.akun.show');
    Route::get('/spv/akun/{id}/edit', [SpvController::class, 'editAkun'])->name('spv.akun.edit');
    Route::put('/spv/akun/{id}', [SpvController::class, 'updateAkun'])->name('spv.akun.update');
});

// Kepala Cabang routes
Route::middleware(['auth', 'role:kepala_cabang'])->group(function () {
    Route::get('/kc/dashboard', [KcController::class, 'dashboard'])->name('kc.dashboard');
    Route::get('/kc/laporan', [KcController::class, 'laporan'])->name('kc.laporan.index');
    Route::get('/kc/ekspor-laporan', [KcController::class, 'exportFollowUpCustomers'])->name('kc.export');
    Route::get('/kc/akun', [KcController::class, 'indexAkun'])->name('kc.akun.index');
    Route::get('/kc/akun/{id}', [KcController::class, 'showAkun'])->name('kc.akun.show');
    Route::get('/kc/akun/{id}/edit', [KcController::class, 'editAkun'])->name('kc.akun.edit');
    Route::put('/kc/akun/{id}', [KcController::class, 'updateAkun'])->name('kc.akun.update');
});

// Admin routes
Route::middleware(['auth', 'role:admin'])->group(function () {
    Route::get('/admin/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/admin/laporan', [AdminController::class, 'laporan'])->name('admin.laporan.index');
    Route::get('/admin/ekspor-laporan', [AdminController::class, 'exportSalesReport'])->name('admin.export');
    Route::get('/admin/akun', [AdminController::class, 'indexAkun'])->name('admin.akun.index');
    Route::get('/admin/akun/{id}', [AdminController::class, 'showAkun'])->name('admin.akun.show');
    Route::get('/admin/akun/{id}/edit', [AdminController::class, 'editAkun'])->name('admin.akun.edit');
    Route::put('/admin/akun/{id}', [AdminController::class, 'updateAkun'])->name('admin.akun.update');
    Route::delete('/admin/akun/{id}', [AdminController::class, 'destroyAkun'])->name('admin.akun.destroy');
    Route::get('/admin/cust', [AdminController::class, 'indexCust'])->name('admin.cust.index');
    Route::get('/admin/cust/create', [AdminController::class, 'createCust'])->name('admin.cust.create');
    Route::post('/admin/cust', [AdminController::class, 'storeCust'])->name('admin.cust.store');
    Route::get('/admin/cust/{id}/edit', [AdminController::class, 'editCust'])->name('admin.cust.edit');
    Route::put('/admin/cust/{id}', [AdminController::class, 'updateCust'])->name('admin.cust.update');
    Route::get('/admin/cust/{id}', [AdminController::class, 'showCust'])->name('admin.cust.show');
    Route::get('/admin/invalid', [AdminController::class, 'invalidCust'])->name('admin.invalid.index');
});
