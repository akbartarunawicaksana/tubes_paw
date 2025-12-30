@extends('layouts.admin')

@section('content')

<div class="card">

    {{-- HEADER --}}
    <div class="card-header">
        <h3>Daftar Produk</h3>
        <a href="{{ route('produk.create') }}" class="btn-primary">
            Tambah Produk
        </a>
    </div>

    {{-- TABLE --}}
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
                        <button class="delete"
                                onclick="return confirm('Hapus produk ini?')">
                            Hapus
                        </button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" style="text-align:center;color:#6b7280">
                    Data produk belum ada
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>

    {{-- PAGINATION --}}
    <div class="pagination">
        <span>Menampilkan {{ $produks->count() }} produk</span>
        <div>
            <button>Sebelumnya</button>
            <button>Selanjutnya</button>
        </div>
    </div>

</div>

@endsection
