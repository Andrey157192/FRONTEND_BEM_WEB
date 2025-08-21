<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM IT Del - Beranda</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
     <!-- @vite('resources/css/app.css') -->
    <style>
        body { font-family: 'Poppins', sans-serif; }
        /* Animasi untuk marquee organisasi */
        .marquee-content {
            animation: marquee 40s linear infinite;
        }
        .marquee-content-reverse {
            animation: marquee-reverse 40s linear infinite;
        }
        .marquee-container:hover .marquee-content,
        .marquee-container:hover .marquee-content-reverse {
            animation-play-state: paused;
        }
        @keyframes marquee {
            from { transform: translateX(0); }
            to { transform: translateX(-50%); }
        }
        @keyframes marquee-reverse {
            from { transform: translateX(-50%); }
            to { transform: translateX(0); }
        }
    </style>
</head>
<body class="bg-brand-light text-text-dark" x-data="{ isMobileMenuOpen: false }" :class="{ 'overflow-hidden': isMobileMenuOpen }">
    <!-- Konten halaman akan dimuat di sini -->
    @yield('content')

</body>
</html>