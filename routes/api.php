<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriApiController;
use App\Http\Controllers\ProdukApiController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// API: KATEGORI
Route::get('/kategori', [KategoriApiController::class, 'getAllKategori']);
Route::get('/kategori/{kategori}', [KategoriApiController::class, 'getKategori']);
Route::post('/kategori', [KategoriApiController::class, 'addKategori']);
Route::put('/kategori/{kategori}', [KategoriApiController::class, 'sunting']);
Route::delete('/kategori/{kategori}', [KategoriApiController::class, 'hapus']);

// API: PRODUK
Route::get('/produk', [ProdukApiController::class, 'getAllProduk']);
Route::get('/produk/{produk}', [ProdukApiController::class, 'getProduk']);
Route::post('/produk', [ProdukApiController::class, 'addProduk']);
Route::get('/produk/kategori/{kategori}', [ProdukApiController::class, 'getProdukKat']);
Route::put('/produk/{produk}', [ProdukApiController::class, 'updateProduk']);