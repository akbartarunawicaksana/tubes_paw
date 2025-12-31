@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="{{ asset('css/stok.css') }}">

<div class="content">
    <div class="card">
        <div class="card-header">
            <h3>Daftar Stok</h3>
            <a href="{{ route('stok.edit', 1) }}" class="btn-primary">Perbarui Stok</a>
        </div>

        <table class="table">
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama Produk</th>
                    <th>SKU</th>
                    <th>Harga</th>
                    <th>Jumlah Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($produk as $item)
                <tr>
                    <td>
                        <img src="{{ asset('storage/' . $item->foto) }}">
                    </td>
                    <td>{{ $item->nama_produk }}</td>
                    <td>{{ $item->sku }}</td>
                    <td>Rp {{ number_format($item->harga, 0, ',', '.') }}</td>
                    <td>{{ $item->stok }}</td>
                    <td class="action">
                        <a href="{{ route('stok.edit', $item->id) }}" class="edit">✏ Ubah</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
