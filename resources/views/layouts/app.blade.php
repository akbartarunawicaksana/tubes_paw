<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Es & Kopi Brasil - Manajemen Stok</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom CSS untuk sidebar -->
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }
        .wrapper {
            display: flex;
            width: 100%;
            min-height: 100vh;
        }
        .sidebar {
            width: 250px;
            background-color: #ffffff;
            border-right: 1px solid #dee2e6;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            box-shadow: 2px 0 10px rgba(0,0,0,0.05);
        }
        .logo {
            padding: 20px;
            text-align: center;
            border-bottom: 1px solid #dee2e6;
            font-size: 1.5rem;
            font-weight: bold;
            color: #dc3545;
        }
        .sidebar ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }
        .sidebar li {
            margin: 8px 15px;
        }
        .sidebar li a {
            display: block;
            padding: 12px 20px;
            color: #333;
            text-decoration: none;
            border-radius: 8px;
            transition: all 0.3s;
        }
        .sidebar li a:hover {
            background-color: #f8f9fa;
        }
        .sidebar li.active a {
            background-color: #dc3545;
            color: white;
            font-weight: 500;
        }
        .content {
            margin-left: 250px;
            padding: 30px;
            width: 100%;
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