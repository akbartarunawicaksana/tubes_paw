// ================= API =================

Route::prefix('api')->group(function () {

    // PRODUK API
    Route::get('produk', [ProductController::class, 'index']);
    Route::post('produk', [ProductController::class, 'store']);
    Route::put('produk/{id}', [ProductController::class, 'update']);
    Route::delete('produk/{id}', [ProductController::class, 'destroy']);

    // PUBLIC API (WAJIB DOSEN)
    Route::get('external', [ProductController::class, 'externalApi']);
});