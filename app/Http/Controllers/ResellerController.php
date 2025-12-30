<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ResellerController extends Controller
{
    public function index()
    {
        // Data dummy dulu (belum database)
        $reseller = [
            [
                'nama' => 'Duta Agam',
                'jenis_toko' => 'Agen',
                'wilayah' => 'Purwokerto',
                'alamat' => 'Jl. Dr. Panjaitan',
                'telepon' => '0856882036',
                'status' => 'Aktif'
            ],
            [
                'nama' => 'Sukma Kusuma',
                'jenis_toko' => 'Reseller',
                'wilayah' => 'Purwokerto',
                'alamat' => 'Jl. Bobosan',
                'telepon' => '0822123432',
                'status' => 'Tidak Aktif'
            ],
        ];

        return view('reseller.index', compact('reseller'));
    }
}