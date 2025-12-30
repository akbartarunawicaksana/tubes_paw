<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Es & Kopi Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- CSS ADMIN --}}
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>
<body>

<div class="wrapper">

    {{-- SIDEBAR --}}
    <div class="sidebar">
        <div class="logo"><strong>Brasil</strong></div>

        <ul>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard">Dashboard</a>
            </li>

            <li class="{{ request()->is('produk*') ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}">Produk</a>
            </li>

            <li class="{{ request()->is('pesanan*') ? 'active' : '' }}">
                <a href="/pesanan">Pesanan</a>
            </li>

            <li class="{{ request()->is('stok*') ? 'active' : '' }}">
                <a href="/stok">Stok</a>
            </li>

            <li class="{{ request()->is('reseller*') ? 'active' : '' }}">
                <a href="/reseller">Reseller</a>
            </li>

            <li class="{{ request()->is('statistik*') ? 'active' : '' }}">
                <a href="/statistik">Statistik</a>
            </li>
        </ul>
    </div>

    {{-- CONTENT --}}
    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>
