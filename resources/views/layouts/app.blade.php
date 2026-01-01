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

    <style>
        /* Background foto toko paling belakang */
        body, html {
            height: 100%;
            margin: 0;
        }

        .wrapper {
            min-height: 100vh;
            background-image: url('/images/bg-toko.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed; /* tetap saat scroll */
            position: relative;
            display: flex;
        }

        /* Overlay putih semi-transparan + blur halus biar konten jelas */
        .wrapper::before {
            content: '';
            position: absolute;
            top: 0; left: 0; right: 0; bottom: 0;
            background: rgba(255, 255, 255, 0.70); /* putih 90% transparan */
            backdrop-filter: blur(2px); /* blur halus seperti Figma */
            z-index: 1;
        }

        /* Sidebar dan content di atas overlay */
        .sidebar, .content {
            position: relative;
            z-index: 2;
        }

        /* Optional: bikin card di content lebih putih dan shadow */
        .card {
            background: rgba(255, 255, 255, 0.98);
            border-radius: 12px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
        }
    </style>
</head>
<body>

<div class="wrapper">

    {{-- SIDEBAR --}}
    <div class="sidebar">
        <div class="logo text-center mb-3">
            <img src="{{ asset('images/LogoBrasilMerah.png') }}" style="width:120px;">
        </div>

        <ul>
            <li class="{{ request()->is('dashboard') ? 'active' : '' }}">
                <a href="/dashboard"><i class="fa-solid fa-house"></i><span>Dashboard</span></a>
            </li>
            <li class="{{ request()->is('produk*') ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}"><i class="fa-solid fa-cart-shopping"></i><span>Produk</span></a>
            </li>
            <li class="{{ request()->is('pesanan*') ? 'active' : '' }}">
                <a href="/pesanan"><i class="fa-solid fa-receipt"></i><span>Pesanan</span></a>
            </li>
            <li class="{{ request()->is('stok*') ? 'active' : '' }}">
                <a href="/stok"><i class="fa-solid fa-boxes-stacked"></i><span>Stok</span></a>
            </li>
            <li class="{{ request()->is('reseller*') ? 'active' : '' }}">
                <a href="/reseller"><i class="fa-solid fa-user-group"></i><span>Reseller</span></a>
            </li>
            <li class="{{ request()->is('statistik*') ? 'active' : '' }}">
                <a href="/statistik"><i class="fa-solid fa-chart-line"></i><span>Statistik</span></a>
            </li>
        </ul>
    </div>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    {{-- CONTENT --}}
    <div class="content">
        @yield('content')
    </div>

</div>

</body>
</html>