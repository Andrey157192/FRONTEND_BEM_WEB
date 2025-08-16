<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM IT DEL 2025</title>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,600&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="{{ asset('css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('css/calendar.css') }}" rel="stylesheet">
     <script src="js/main.js"></script>

</head>
<body>
    <!-- Header -->
    <header>
        <div class="navbar">
            <div class="logo-tagline">
                <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png" alt="BEM IT DEL Logo">
                <span class="tagline">BEM IT DEL <span style="font-weight:400;">#SahatMarsada</span></span>
            </div>
           <nav class="border-b bg-white shadow-sm">
    <div class="container mx-auto px-4">
        <ul class="flex items-center space-x-1">
            <li>
                <a href="{{ url('/') }}" class="nav-link">Beranda</a>
            </li>
            <li>
                <a href="{{ url('/agenda') }}" class="nav-link">Agenda & Kegiatan</a>
            </li>
            <li>
                <a href="{{ url('/program-kerja') }}" class="nav-link">Program Kerja</a>
            </li>
            
            <!-- Added Organisasi dropdown with nested structure -->
            <li class="dropdown">
                <button class="nav-link dropdown-trigger" type="button">
                    Organisasi
                    <svg class="ml-1 h-4 w-4 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path>
                    </svg>
                </button>
                <div class="dropdown-content">
                    <div class="dropdown-grid">
                        <div class="dropdown-section">
                            <h4 class="dropdown-header">UKM</h4>
                            <div class="dropdown-items">
                                <a href="{{ url('/organisasi/ukm/delpro') }}" class="dropdown-item">DELPRO</a>
                                <a href="{{ url('/organisasi/ukm/ptm') }}" class="dropdown-item">PTM</a>
                            </div>
                        </div>
                        <div class="dropdown-section">
                            <h4 class="dropdown-header">HIMAPRO</h4>
                            <div class="dropdown-items">
                                <a href="{{ url('/organisasi/himapro/himatif') }}" class="dropdown-item">HIMATIF</a>
                                <a href="{{ url('/organisasi/himapro/trpl') }}" class="dropdown-item">TRPL</a>
                            </div>
                        </div>
                        <div class="dropdown-section">
                            <h4 class="dropdown-header">BEM</h4>
                            <div class="dropdown-items">
                                <a href="{{ url('/organisasi/bem/bph') }}" class="dropdown-item">BPH</a>
                                <a href="{{ url('/organisasi/bem/kominfo') }}" class="dropdown-item">KOMINFO</a>
                            </div>
                        </div>
                    </div>
                </div>
            </li>
            
            <li>
                <a href="{{ url('/forum') }}" class="nav-link">Forum & Diskusi</a>
            </li>
            <li>
                <a href="{{ url('/kontak') }}" class="nav-link">Kontak</a>
            </li>
        </ul>
    </div>
    
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
