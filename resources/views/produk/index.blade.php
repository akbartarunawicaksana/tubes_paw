@extends('layouts.app')

@section('content')
<div class="container mt-4">
    <h2>Daftar Produk</h2>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <a href="{{ route('produk.create') }}" class="btn btn-primary mb-3">Tambah Produk</a>

    <table class="table table-bordered table-hover">
        <thead class="table-dark">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Nama Produk</th>
                <th>SKU</th>
                <th>Harga</th>
                <th>Stok</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($produks as $produk)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>
                        @if ($produk->foto)
                            <img src="{{ asset('storage/' . $produk->foto) }}" alt="Foto produk" width="80" class="img-thumbnail">
                        @else
                            <span class="text-muted">Tidak ada foto</span>
                        @endif
                    </td>
                    <td>{{ $produk->nama_produk }}</td>
                    <td>{{ $produk->sku }}</td>
                    <td> Rp {{ number_format($produk->harga, 0, ',', '.') }}</td>
                    <td>{{ $produk->stok }}</td>
                    <td>
                        <a href="{{ route('produk.edit', $produk->id) }}" class="btn btn-sm btn-warning">Ubah</a>

                        <form action="{{ route('produk.destroy', $produk->id) }}" method="POST" style="display: inline;">
                            @csrf
                            @method('DELETE')
                            <button type="button" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus {{ $produk->nama_produk }}?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="7" class="text-center">Belum ada produk</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

@endsection