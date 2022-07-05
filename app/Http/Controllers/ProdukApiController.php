<?php

namespace App\Http\Controllers;

use App\Models\Kategori;
use App\Models\Produk;

class ProdukApiController extends Controller {
    public function getAllProduk() {
      return Produk::select('produks.id', 'produks.nama_produk', 'produks.harga', 'produks.gambar',
          'kategoris.id', 'kategoris.nama_kategori')
        ->join('kategoris', 'produks.kategori_id', '=', 'kategoris.id')
        ->get();
    }

    public function getProduk(Produk $produk) {
      return Produk::find($produk);
    }

    public function getProdukKat(Kategori $kategori) {
      /*
      select a.*, b.* from poduks a
      inner join kategoris b on a.kategori_id=b.id
      where b.id=request
      */
      return Produk::select('*')
        ->join('kategoris', 'produks.kategori_id', '=', 'kategoris.id')
        ->where('kategoris.id', $kategori->id)
        ->get();
    }

    public function addProduk() {
      request()->validate([
        'nama_produk' => 'required',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'gambar' => 'required',
      ]);

      return Produk::created([
        'nama_produk' => request('nama_produk'),
        'kategori_id' => request('kategori_id'),
        'deskripsi' => request('deskripsi'),
        'harga' => request('harga'),
        'gambar' => request('gambar')
      ]);
    }

    public function updateProduk(Produk $produk) {
      request()->validate([
        'nama_produk' => 'required',
        'kategori_id' => 'required',
        'deskripsi' => 'required',
        'harga' => 'required',
        'gambar' => 'required',
      ]);
      
      $success = $produk->update([
        'nama_produk' => request('nama_produk'),
        'kategori_id' => request('kategori_id'),
        'deskripsi' => request('deskripsi'),
        'harga' => request('harga'),
        'gambar' => request('gambar')
      ]);

      return [
        'success' => $success,
        'status' => 200
      ];
    }
}
