<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title')</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark mb-4">
    <div class="container">
        <a class="navbar-brand" href="/">Visi Digital Nusantara</a>

        <ul class="navbar-nav ms-auto">
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="/tentang">Tentang</a>
            </li>
            <li class="nav-item me-3">
                <a class="nav-link text-white" href="/kontak">Kontak</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="/layanan">Layanan & Produk</a>
            </li>
        </ul>
    </div>
</nav>


    {{-- Isi halaman akan masuk di sini --}}
    <div class="container">
        @yield('content')
    </div>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
