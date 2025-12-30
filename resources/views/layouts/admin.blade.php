<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Es & Kopi Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS KHUSUS PRODUK --}}
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>
<body>

<div class="wrapper">

    <div class="sidebar">
        <div class="logo"><strong>Brasil</strong></div>
        <ul>
            <li class="active"><a href="{{ route('produk.index') }}">Produk</a></li>
            <li><a href="/stok">Stok</a></li>
        </ul>
    </div>

    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>
