<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('layouts/admin/admin_cust');
});
