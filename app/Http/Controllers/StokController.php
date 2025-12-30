<?php

namespace App\Http\Controllers;

use App\Models\Produk;
use Illuminate\Http\Request;

class StokController extends Controller
{
    // READ - daftar stok
    public function index()
    {
        $produk = Produk::all(); // ambil semua data produk
        return view('stok.index', compact('produk'));
    }
}
