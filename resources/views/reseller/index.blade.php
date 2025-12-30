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
            <li><a href="{{ route('stok.index') }}">Stok</a></li>
            <li class="active"><a href="{{ route('reseller.index') }}">Reseller</a></li>
            <li><a href="#">Statistik</a></li>
        </ul>
    </div>

    {{-- CONTENT --}}
    <div class="content">
        <div class="card">
            <div class="card-header">
                <h3>Daftar Reseller</h3>
                <div>
                    <a href="#" class="btn-primary">Tambah Reseller</a>
                    <a href="#" class="btn-danger">Hapus Reseller</a>
                </div>
            </div>

            <table class="table">
                <thead>
                    <tr>
                        <th>Nama</th>
                        <th>Jenis Toko</th>
                        <th>Wilayah</th>
                        <th>Alamat</th>
                        <th>No Telepon</th>
                        <th>Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($reseller as $item)
                    <tr>
                        <td>{{ $item['nama'] }}</td>
                        <td>{{ $item['jenis_toko'] }}</td>
                        <td>{{ $item['wilayah'] }}</td>
                        <td>{{ $item['alamat'] }}</td>
                        <td>{{ $item['telepon'] }}</td>
                        <td>
                            @if ($item['status'] == 'Aktif')
                                <span class="badge success">Aktif</span>
                            @else
                                <span class="badge danger">Tidak Aktif</span>
                            @endif
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