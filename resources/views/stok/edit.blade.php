<h1>Edit Stok</h1>

<form action="{{ route('stok.update', $produk->id) }}" method="POST">
    @csrf
    @method('PUT')

    <label>Nama Produk</label><br>
    <input type="text" value="{{ $produk->nama_produk }}" disabled>

    <br><br>

    <label>Stok</label><br>
    <input type="number" name="stok" value="{{ $produk->stok }}" min="0">

    <br><br>

    <button type="submit">Simpan</button>
</form>
