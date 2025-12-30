<link rel="stylesheet" href="{{ asset('css/stok.css') }}">

<div class="wrapper">

    {{-- SIDEBAR --}}
    <div class="sidebar">
        <div class="logo">
            <strong>Brasil</strong>
        </div>

        <ul>
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Produk</a></li>
            <li><a href="#">Pesanan</a></li>
            <li class="active"><a href="{{ route('stok.index') }}">Stok</a></li>
            <li><a href="#">Reseller</a></li>
            <li><a href="#">Statistik</a></li>
        </ul>
    </div>

    {{-- CONTENT --}}
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Stok</h3>
                <a href="#" class="btn-primary">Perbarui Stok</a>
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
                            <a href="#" class="delete">🗑 Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>

            <div class="pagination">
                <button>Sebelumnya</button>
                <span>Halaman 1 dari 1</span>
                <button>Selanjutnya</button>
            </div>
        </div>
    </div>

</div>
