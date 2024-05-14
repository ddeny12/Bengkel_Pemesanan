<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BarangController;
use App\Http\Controllers\SupplierController;

// Halaman welcome default Laravel
Route::get('/', function () {
    return view('welcome');
});

// Barang routes
Route::resource('barangs', BarangController::class);

// Supplier routes
Route::resource('suppliers', SupplierController::class);
