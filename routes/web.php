<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\Admin\DataCustomerController as AdminDataCustomerController;
use App\Http\Controllers\Admin\DataSalesController as AdminDataSalesController;
use App\Http\Controllers\Admin\LaporanController as AdminLaporanController;
use App\Http\Controllers\Admin\ManageAkunController as AdminManageAkunController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Kacab\DashboardController as KacabDashboardController;
use App\Http\Controllers\Kacab\DataCustomerController as KacabDataCustomerController;
use App\Http\Controllers\Kacab\DataSalesController as KacabDataSalesController;
use App\Http\Controllers\Kacab\LaporanController as KacabLaporanController;
use App\Http\Controllers\Kacab\ManageAkunController as KacabManageAkunController;
use App\Http\Controllers\Sales\DashboardController as SalesDashboardController;
use App\Http\Controllers\Sales\LaporanController as SalesLaporanController;
use App\Http\Controllers\Spv\DataCustomerController as SpvDataCustomerController;
use App\Http\Controllers\Spv\DashboardController as SpvDashboardController;
use App\Http\Controllers\Spv\DataSalesController as SpvDataSalesController;
use App\Http\Controllers\Spv\LaporanController as SpvLaporanController;
use App\Http\Controllers\Spv\ManageAkunController as SpvManageAkunController;

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'index')->name('login');
    Route::get('form_login', 'form_login')->name('form_login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});

// Admin
Route::middleware(['auth'])->prefix('admin')->name('admin.')->group(function () {
    Route::get('dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    Route::get('data_cust', [AdminDataCustomerController::class, 'index'])->name('data_cust');
    Route::get('data_sales', [AdminDataSalesController::class, 'index'])->name('data_sales');
    Route::get('laporan', [AdminLaporanController::class, 'index'])->name('laporan');
    Route::get('manage_akun', [AdminManageAkunController::class, 'index'])->name('manage_akun');
});

// Kacab
Route::middleware(['auth'])->prefix('kacab')->name('kacab.')->group(function () {
    Route::get('dashboard', [KacabDashboardController::class, 'index'])->name('dashboard');
    Route::get('data_cust', [KacabDataCustomerController::class, 'index'])->name('data_cust');
    Route::get('data_sales', [KacabDataSalesController::class, 'index'])->name('data_sales');
    Route::get('laporan', [KacabLaporanController::class, 'index'])->name('laporan');
    Route::get('manage_akun', [KacabManageAkunController::class, 'index'])->name('manage_akun');
});

// Sales
Route::middleware(['auth'])->prefix('sales')->name('sales.')->group(function () {
    Route::get('dashboard', [SalesDashboardController::class, 'index'])->name('dashboard');
    Route::get('laporan', [SalesLaporanController::class, 'index'])->name('laporan');
});

// Spv
Route::middleware(['auth'])->prefix('spv')->name('spv.')->group(function () {
    Route::get('dashboard', [SpvDashboardController::class, 'index'])->name('dashboard');
    Route::get('data_cust', [SpvDataCustomerController::class, 'index'])->name('data_cust');
    Route::get('data_sales', [SpvDataSalesController::class, 'index'])->name('data_sales');
    Route::get('laporan', [SpvLaporanController::class, 'index'])->name('laporan');
    Route::get('manage_akun', [SpvManageAkunController::class, 'index'])->name('manage_akun');
});

