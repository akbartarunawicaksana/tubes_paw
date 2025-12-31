<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Es & Kopi Brasil</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS kamu -->
    <link rel="stylesheet" href="{{ asset('css/produk.css') }}">

    <!-- CSS tambahan untuk layout sidebar fixed & konten bergeser -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            background-color: #f8f9fa;
        }
        .wrapper {
            display: flex;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            overflow-y: auto;
            box-shadow: 2px 0 5px rgba(0,0,0,0.05);
        }
        .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
            font-size: 1.8rem;
            font-weight: bold;
            color: #dc3545;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 20px 0;
        }
        .sidebar li {
            margin: 10px 15px;
        }
        .sidebar li a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            font-weight: 500;
            transition: all 0.3s;
        }
        .sidebar li a:hover {
            background-color: #f1f1f1;
        }
        .sidebar li.active a {
            background-color: #dc3545;
            color: white;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
            width: 100%;
            box-sizing: border-box;
        }
        @media (max-width: 768px) {
            .sidebar {
                width: 200px;
            }
            .content {
                margin-left: 200px;
                padding: 20px;
            }
        }
    </style>
</head>
<body>

<div class="wrapper">

    <!-- SIDEBAR -->
    <div class="sidebar">
        <div class="logo"><strong>Brasil</strong></div>

        <ul>
            <li class="{{ request()->is('/') || request()->is('dashboard') ? 'active' : '' }}">
                <a href="/">Dashboard</a>
            </li>

            <li class="{{ request()->routeIs('produk.*') ? 'active' : '' }}">
                <a href="{{ route('produk.index') }}">Produk</a>
            </li>

            <li class="{{ request()->routeIs('pesanan.*') ? 'active' : '' }}">
                <a href="#">Pesanan</a>
            </li>

            <li class="{{ request()->routeIs('stok.*') ? 'active' : '' }}">
                <a href="#">Stok</a>
            </li>

            <li class="{{ request()->routeIs('reseller.*') ? 'active' : '' }}">
                <a href="#">Reseller</a>
            </li>

            <li class="{{ request()->routeIs('statistik*') ? 'active' : '' }}">
                <a href="#">Statistik</a>
            </li>
        </ul>
    </div>

    <!-- CONTENT -->
    <div class="content">
        @yield('content')
    </div>

</div>

<!-- Bootstrap JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>