<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Es & Kopi Brasil - Manajemen Stok</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
</head>
<body class="bg-light">
    <div class="d-flex">
        <!-- Sidebar Kiri -->
        <div class="bg-white border-end shadow-sm" style="width: 280px; height: 100vh; position: fixed;">
            <div class="p-4 text-center border-bottom">
                <h4 class="fw-bold text-danger mb-0">Es & Kopi Brasil</h4>
                <small class="text-muted">Manajemen Stok</small>
            </div>
            <nav class="nav flex-column p-3">
                <a href="{{ route('produk.index') }}" class="nav-link {{ request()->routeIs('produk.*') ? 'active bg-danger text-white' : 'text-dark' }} rounded mb-2">
                    <i class="bi bi-box-seam me-2"></i> Produk
                </a>
                <a href="{{ route('stok.index') ?? '#' }}" class="nav-link {{ request()->routeIs('stok.*') ? 'active bg-danger text-white' : 'text-dark' }} rounded mb-2">
                    <i class="bi bi-bar-chart me-2"></i> Stok
                </a>
                <a href="{{ route('reseller.index') ?? '#' }}" class="nav-link {{ request()->routeIs('reseller.*') ? 'active bg-danger text-white' : 'text-dark' }} rounded mb-2">
                    <i class="bi bi-people me-2"></i> Reseller
                </a>
                </a>
            </nav>
        </div>

        <!-- Konten Utama -->
        <div class="flex-grow-1 p-4" style="margin-left: 280px; min-height: 100vh;">
            <div class="container-fluid">
                @yield('content')
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>