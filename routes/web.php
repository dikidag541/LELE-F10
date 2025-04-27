<?php

use App\Http\Controllers\ProduksiController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BibitController;
Route::get('/', function () {
    return view('home');
});

Route::get('/produksi', [ProduksiController::class, 'index'])->name('produksi');
Route::post('/bibit/store', [BibitController::class, 'store'])->name('bibit.store');
Route::get('/bibit', [BibitController::class, 'index']);
Route::post('/bibit', [BibitController::class, 'store']);
Route::delete('/produksi/bibit/{id}', [ProduksiController::class, 'destroyBibit'])->name('bibit.destroy');
