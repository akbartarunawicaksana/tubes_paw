<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    public function index()
    {
        $produk = Produk::all(); // Data stok diambil dari tabel produk

        return view('stok.index', compact('produk'));
    }
}
