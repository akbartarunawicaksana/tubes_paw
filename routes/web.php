<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\StokController;
use App\Http\Controllers\ResellerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

// ================= PRODUK =================

// READ
Route::get('/produk', [ProductController::class, 'index'])->name('produk.index');

// CREATE
Route::get('/produk/create', [ProductController::class, 'create'])->name('produk.create');
Route::post('/produk', [ProductController::class, 'store'])->name('produk.store');

// UPDATE
Route::get('/produk/{id}/edit', [ProductController::class, 'edit'])->name('produk.edit');
Route::put('/produk/{id}', [ProductController::class, 'update'])->name('produk.update');

// DELETE
Route::delete('/produk/{id}', [ProductController::class, 'destroy'])->name('produk.destroy');


// ================= STOK =================

Route::get('/stok', [StokController::class, 'index'])->name('stok.index');
Route::get('/stok/perbarui', [StokController::class, 'perbaruiForm'])->name('stok.edit');
Route::post('/stok/perbarui', [StokController::class, 'perbaruiUpdate'])->name('stok.update');


// ================= RESELLER =================

Route::get('/reseller', [ResellerController::class, 'index'])->name('reseller.index');
Route::get('/reseller/create', [ResellerController::class, 'create'])->name('reseller.create');
Route::post('/reseller', [ResellerController::class, 'store'])->name('reseller.store');

Route::patch('/reseller/{id}/toggle-status', [ResellerController::class, 'toggleStatus'])
    ->name('reseller.toggleStatus');

Route::delete('/reseller/{id}', [ResellerController::class, 'destroy'])
    ->name('reseller.destroy');


// ================= DASHBOARD =================

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard.index');


// ================= PENGATURAN =================

Route::get('/pengaturan', function () {
    return view('pengaturan.index');
})->name('pengaturan.index');

Route::get('/pengaturan/keamanan', function () {
    return view('pengaturan.keamanan');
})->name('pengaturan.keamanan');

Route::get('/pengaturan/profil', function () {
    return view('pengaturan.profil');
})->name('profil.index');

Route::get('/pengaturan/profil/edit', function () {
    return view('pengaturan.profil-edit');
})->name('profil.edit');


