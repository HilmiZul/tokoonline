<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\KategoriApiController;
use App\Models\Kategori;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/kategori', [KategoriApiController::class, 'getAllKategori']);
Route::get('/kategori/{kategori}', [KategoriApiController::class, 'getKategori']);
Route::post('/kategori', [KategoriApiController::class, 'addKategori']);
Route::put('/kategori/{kategori}', [KategoriApiController::class, 'sunting']);
Route::delete('/kategori/{kategori}', [KategoriApiController::class, 'hapus']);