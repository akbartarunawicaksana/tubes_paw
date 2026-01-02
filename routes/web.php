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

// READ - Daftar Stok
Route::get('/stok', [StokController::class, 'index'])->name('stok.index');

// PERBARUI STOK UMUM
Route::get('/stok/perbarui', [StokController::class, 'perbaruiForm'])->name('stok.edit');
Route::post('/stok/perbarui', [StokController::class, 'perbaruiUpdate'])->name('stok.update');

// RESELLER
use App\Http\Controllers\ResellerController;
Route::get('/reseller', [ResellerController::class, 'index'])
    ->name('reseller.index');
Route::get('/reseller/create', [ResellerController::class, 'create'])
    ->name('reseller.create');
Route::post('/reseller', [ResellerController::class, 'store'])
    ->name('reseller.store');
Route::patch(
    '/reseller/{id}/toggle-status',
    [ResellerController::class, 'toggleStatus']
)->name('reseller.toggleStatus');

// Hapus reseller
Route::delete(
    '/reseller/{id}',
    [ResellerController::class, 'destroy']
)->name('reseller.destroy');

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');

// Pengaturan
Route::get('/pengaturan', function () {
    return view('pengaturan.index');
})->name('pengaturan.index');
