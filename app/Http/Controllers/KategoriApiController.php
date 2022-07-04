<?php

namespace App\Http\Controllers;
use App\Models\Kategori;

class KategoriApiController extends Controller {
  public function getAllKategori() {
    return Kategori::all();
  }

  public function getKategori(Kategori $kategori) {
    return Kategori::find($kategori);
  }

  public function addKategori() {
    request()->validate([
      "nama_kategori"=>"required"
    ]);

    return Kategori::create([
      "nama_kategori"=>request('nama_kategori')
    ]);
  }

  public function sunting(Kategori $kategori) {
    request()->validate([
      'nama_kategori' => 'required'
    ]);
    $success = $kategori->update([
      'nama_kategori' => request('nama_kategori')
    ]);
    return [
      'sucess' => $success,
      'status' => 200
    ];
  }

  public function hapus(Kategori $kategori) {
    $success = $kategori->delete();
    return [
      'success' => $success,
      'status' => 200
    ];
  }
}
