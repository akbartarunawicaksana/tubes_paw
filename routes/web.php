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

use App\Http\Controllers\StokController;

// READ - Tampilkan semua stok (Daftar Stok)
Route::get(
    uri: '/stok',
    action: [StokController::class, 'index']
)->name(name: 'stok.index');

// UPDATE - Tampilkan form edit stok
Route::get(
    uri: '/stok/{id}/edit',
    action: [StokController::class, 'edit']
)->name(name: 'stok.edit');

// UPDATE - Simpan perubahan stok
Route::put(
    uri: '/stok/{id}',
    action: [StokController::class, 'update']
)->name(name: 'stok.update');

// DELETE - Hapus stok
Route::delete(
    uri: '/stok/{id}',
    action: [StokController::class, 'destroy']
)->name(name: 'stok.destroy');

// RESELLER
use App\Http\Controllers\ResellerController;

Route::get('/reseller', [ResellerController::class, 'index'])
    ->name('reseller.index');

// LOGIN
use App\Http\Controllers\AuthController;

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('login.process');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware('auth');