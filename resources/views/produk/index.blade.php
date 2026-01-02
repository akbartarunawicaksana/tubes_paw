@extends('layouts.app')

@section('content')

<div class="card">

    {{-- HEADER --}}
    <div class="card-header">
        <h3>Daftar Produk</h3>
        <a href="{{ route('produk.create') }}" class="btn-primary">
            Tambah Produk
        </a>
    </div>

    {{-- TABEL --}}
    <table class="table">
        <thead>
            <tr>
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
                <td>
                    @if($produk->foto)
                        <img src="{{ asset('storage/'.$produk->foto) }}" alt="foto">
                    @else
                        -
                    @endif
                </td>
                <td>{{ $produk->nama_produk }}</td>
                <td>{{ $produk->sku }}</td>
                <td>Rp {{ number_format($produk->harga,0,',','.') }}</td>
                <td>{{ $produk->stok }}</td>
                <td class="action">
                    <a href="{{ route('produk.edit',$produk->id) }}" class="edit">Edit</a>

                    <form action="{{ route('produk.destroy',$produk->id) }}"
                          method="POST"
                          style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-sm btn-danger"
                            onclick="return confirm('Hapus produk ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="empty">
                    Data produk belum ada
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- PAGINATION --}}
    @if ($produks->hasPages())
    <div class="pagination">
        <span>
            Menampilkan {{ $produks->firstItem() }} – {{ $produks->lastItem() }}
            dari {{ $produks->total() }} produk
        </span>

        <div class="pagination-links">
            {{ $produks->links('Vendor.pagination.default') }}
        </div>
    </div>
    @endif

</div>

@endsection