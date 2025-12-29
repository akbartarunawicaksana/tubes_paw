<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController; 

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// READ - Tampilkan semua produk (Daftar Produk)
Route::get(uri: '/produk', action: [ProductController::class, 'index'])->name(name: 'produk.index');

// CREATE - Tampilkan form tambah produk baru
Route::get(uri: '/produk/create', action: [ProductController::class, 'create'])->name(name: 'produk.create');

// CREATE - Simpan produk baru
Route::post(uri: '/produk', action: [ProductController::class, 'store'])->name(name: 'produk.store');

// UPDATE - Tampilkan form edit produk
Route::get(uri: '/produk/{id}/edit', action: [ProductController::class, 'edit'])->name(name: 'produk.edit');

// UPDATE - Simpan perubahan produk
Route::put(uri: '/produk/{id}', action: [ProductController::class, 'update'])->name(name: 'produk.update');

// DELETE - Hapus produk
Route::delete(uri: '/produk/{id}', action: [ProductController::class, 'destroy'])->name(name: 'produk.destroy');