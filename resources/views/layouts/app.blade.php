<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UTS Web Development - Desih Angraeni</title>
    <link href="https://jsdelivr.net" rel="stylesheet">
</head>
<body class="d-flex flex-column min-vh-100 bg-light">

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">Sistem Sekolah</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{ route('students.index') }}">Daftar Siswa</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Konten Utama -->
    <div class="container my-5 flex-grow-1">
        @yield('content')
    </div>

    <!-- Footer Wajib -->
    <footer class="bg-dark text-white text-center py-3 mt-auto">
        <div class="container">
            <p class="m-0">Desih Angraeni · 2457401006</p>
        </div>
    </footer>

    <script src="https://jsdelivr.net"></script>
</body>
</html>
