<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Es & Kopi Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    {{-- Bootstrap --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    {{-- Font Awesome --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">
</head>
<body>

<div class="wrapper">

    {{-- SIDEBAR --}}
    <div class="sidebar">

    {{-- LOGO --}}
    <div class="logo">
    <img src="{{ asset('images/LogoBrasilMerah.png') }}" style="width:120px;">
    </div>

    {{-- MENU UTAMA --}}
    <ul class="menu">
        <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
            <a href="/dashboard">
                <i class="fa-solid fa-house"></i>
                <span>Dashboard</span>
            </a>
        </li>

        <li class="{{ request()->is('produk*') ? 'active' : '' }}">
            <a href="{{ route('produk.index') }}">
                <i class="fa-solid fa-cart-shopping"></i>
                <span>Produk</span>
            </a>
        </li>

        <li class="{{ request()->is('pesanan*') ? 'active' : '' }}">
            <a href="/pesanan">
                <i class="fa-solid fa-receipt"></i>
                <span>Pesanan</span>
            </a>
        </li>

        <li class="{{ request()->is('stok*') ? 'active' : '' }}">
            <a href="/stok">
                <i class="fa-solid fa-boxes-stacked"></i>
                <span>Stok</span>
            </a>
        </li>

        <li class="{{ request()->is('reseller*') ? 'active' : '' }}">
            <a href="/reseller">
                <i class="fa-solid fa-user-group"></i>
                <span>Reseller</span>
            </a>
        </li>

        <li class="{{ request()->is('statistik*') ? 'active' : '' }}">
            <a href="/statistik">
                <i class="fa-solid fa-chart-line"></i>
                <span>Statistik</span>
            </a>
        </li>
    </ul>

    {{-- MENU BAWAH --}}
    <ul class="menu bottom-menu">
        <li>
            <a href="/pengaturan">
                <i class="fa-solid fa-gear"></i>
                <span>Pengaturan</span>
            </a>
        </li>

        <li>
            <a href="/logout">
                <i class="fa-solid fa-right-from-bracket"></i>
                <span>Keluar</span>
            </a>
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