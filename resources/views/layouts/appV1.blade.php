<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM IT DEL 2025</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
</head>
<body>
    <!-- Header -->
    <header>
        <div class="navbar">
            <div class="logo-tagline">
                <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png" alt="BEM IT DEL Logo">
                <span class="tagline">BEM IT DEL <span style="font-weight:400;">#SahatMarsada</span></span>
            </div>
            <nav>
                <ul>
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Agenda & Kegiatan</a></li>
                    <li><a href="#">Program Kerja</a></li>
                    <li><a href="#">Forum & Diskusi</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </nav>
            <span class="search-icon">&#128269;</span>
        </div>
    </header>

    @yield('content')

    <!-- Footer -->
    <footer>
        <div class="footer-main">
            <div class="footer-logo">
                <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png" alt="BEM IT DEL Logo">
            </div>
            <div class="footer-info">
                <div class="footer-title">BEM IT DEL 2025</div>
                Institut Teknologi Del, Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir, Sumatera Utara 22381<br>
                <span style="display:inline-block;margin-top:4px;">&#9993; bem@del.ac.id</span>
            </div>
            <div class="footer-links">
                <div class="footer-title">Akses Cepat</div>
                <ul>
                    <li><a href="#">APAPAPAPA</a></li>
                    <li><a href="#">Biro dan Departemen</a></li>
                    <li><a href="#">Informasi Beasiswa</a></li>
                    <li><a href="#">APAPAPPPA</a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            &copy; 2025 BEM IT DEL. All rights reserved.
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            once: true,
            offset: 100
        });
    </script>
</body>
</html>
