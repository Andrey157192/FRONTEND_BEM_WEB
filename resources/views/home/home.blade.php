<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM IT DEL 2025 - #SahatMarsada</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.1/font/bootstrap-icons.min.css"
        rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">

    <style>
        :root {
            --primary: #1a5cd6;
            --secondary: #0f3f87;
            --accent: #4285f4;
            --light-blue: #e8f4ff;
            --gradient: linear-gradient(135deg, #0f3f87 0%, #1a5cd6 50%, #4285f4 100%);
            --gradient-overlay: linear-gradient(135deg, rgba(15, 63, 135, 0.9) 0%, rgba(26, 92, 214, 0.8) 50%, rgba(66, 133, 244, 0.7) 100%);
            --shadow: 0 10px 40px rgba(26, 92, 214, 0.15);
            --shadow-hover: 0 20px 60px rgba(26, 92, 214, 0.25);
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: #f8fbff;
            overflow-x: hidden;
        }

        /* Animated Background */
        .animated-bg {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            z-index: -2;
            background: linear-gradient(45deg, #f8fbff 0%, #e8f4ff 100%);
        }

        .floating-shapes {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            overflow: hidden;
            z-index: -1;
        }

        .shape {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.1;
            animation: float 20s infinite linear;
        }

        .circle {
            position: absolute;
            border-radius: 50%;
            background: var(--gradient);
            opacity: 0.15;
            filter: blur(80px);
            z-index: -1;
        }

        .c1 {
            width: 300px;
            height: 300px;
            top: -50px;
            left: -50px;
        }

        .c2 {
            width: 250px;
            height: 250px;
            bottom: 100px;
            right: -80px;
        }

        .c3 {
            width: 200px;
            height: 200px;
            top: 50%;
            left: -100px;
        }

        .c4 {
            width: 180px;
            height: 180px;
            bottom: -60px;
            left: 50%;
            transform: translateX(-50%);
        }

        .shape:nth-child(1) {
            width: 300px;
            height: 300px;
            top: -150px;
            left: -150px;
            animation-delay: 0s;
        }

        .shape:nth-child(2) {
            width: 200px;
            height: 200px;
            top: 20%;
            right: -100px;
            animation-delay: -5s;
        }

        .shape:nth-child(3) {
            width: 150px;
            height: 150px;
            bottom: 20%;
            left: -75px;
            animation-delay: -10s;
        }

        .shape:nth-child(4) {
            width: 100px;
            height: 100px;
            bottom: -50px;
            right: 20%;
            animation-delay: -15s;
        }

        @keyframes float {
            0% {
                transform: translateY(0px) rotate(0deg);
            }

            33% {
                transform: translateY(-30px) rotate(120deg);
            }

            66% {
                transform: translateY(30px) rotate(240deg);
            }

            100% {
                transform: translateY(0px) rotate(360deg);
            }
        }

        /* Navbar Styles */
        .navbar {
            background: rgba(255, 255, 255, 0.95) !important;
            backdrop-filter: blur(20px);
            border-bottom: 1px solid rgba(26, 92, 214, 0.1);
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.05);
            padding: 1rem 0;
            transition: all 0.3s ease;
        }

        .navbar.scrolled {
            padding: 0.5rem 0;
            background: rgba(255, 255, 255, 0.98) !important;
            box-shadow: var(--shadow);
        }

        .navbar-brand {
            font-weight: 700;
            font-size: 1.4rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            transition: all 0.3s ease;
        }

        .navbar-brand img {
            transition: transform 0.3s ease;
        }

        .navbar-brand:hover img {
            transform: rotate(360deg);
        }

        .navbar-nav .nav-link {
            font-weight: 500;
            color: var(--primary) !important;
            margin: 0 0.5rem;
            padding: 0.7rem 1.2rem !important;
            border-radius: 50px;
            transition: all 0.3s ease;
            position: relative;
        }

        .navbar-nav .nav-link:hover,
        .navbar-nav .nav-link.active {
            background: var(--gradient);
            color: #fff !important;
            transform: translateY(-2px);
            box-shadow: var(--shadow);
        }

        .navbar-toggler {
            border: none;
            padding: 0.5rem;
            border-radius: 10px;
            background: var(--light-blue);
        }

        .navbar-toggler:focus {
            box-shadow: none;
        }

        /* Mobile Sidebar */
        .mobile-sidebar {
            position: fixed;
            top: 0;
            right: -100%;
            width: 300px;
            height: 100vh;
            background: var(--gradient);
            z-index: 9999;
            transition: right 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
            box-shadow: -10px 0 30px rgba(0, 0, 0, 0.2);
        }

        .mobile-sidebar.active {
            right: 0;
        }

        .sidebar-header {
            padding: 2rem;
            text-align: center;
            color: white;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .sidebar-header img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            margin-bottom: 1rem;
            border: 3px solid rgba(255, 255, 255, 0.3);
        }

        .sidebar-nav {
            padding: 2rem 0;
        }

        .sidebar-nav .nav-link {
            color: rgba(255, 255, 255, 0.9) !important;
            padding: 1rem 2rem;
            border: none;
            border-radius: 0;
            font-weight: 500;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
        }

        .sidebar-nav .nav-link i {
            width: 24px;
            margin-right: 1rem;
        }

        .sidebar-nav .nav-link:hover {
            background: rgba(255, 255, 255, 0.1);
            color: #fff !important;
            padding-left: 2.5rem;
        }

        .sidebar-close {
            position: absolute;
            top: 1rem;
            right: 1rem;
            background: none;
            border: none;
            color: white;
            font-size: 1.5rem;
            padding: 0.5rem;
            border-radius: 50%;
            transition: all 0.3s ease;
        }

        .sidebar-close:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: rotate(90deg);
        }

        .sidebar-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            z-index: 9998;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
        }

        .sidebar-overlay.active {
            opacity: 1;
            visibility: visible;
        }

        /* Hero Section */
        .hero {
            min-height: 100vh;
            background: var(--gradient);
            color: #fff;
            display: flex;
            align-items: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.03)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            pointer-events: none;
        }

        .hero-particle {
            position: absolute;
            width: 6px;
            height: 6px;
            background: rgba(255, 255, 255, 0.6);
            border-radius: 50%;
            animation: particle 15s infinite linear;
        }

        @keyframes particle {
            0% {
                transform: translateY(100vh) rotate(0deg);
                opacity: 0;
            }

            10% {
                opacity: 1;
            }

            90% {
                opacity: 1;
            }

            100% {
                transform: translateY(-100px) rotate(360deg);
                opacity: 0;
            }
        }

        .hero-title {
            font-size: clamp(2.5rem, 7vw, 4.5rem);
            font-weight: 800;
            line-height: 1.1;
            margin-bottom: 1.5rem;
            text-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
        }

        .hero-subtitle {
            font-size: clamp(1.1rem, 3vw, 1.3rem);
            font-weight: 400;
            opacity: 0.95;
            margin-bottom: 2.5rem;
            line-height: 1.6;
        }

        .hero-logo {
            position: relative;
            max-width: 280px;
            margin: 0 auto;
        }

        .hero-logo img {
            width: 100%;
            height: auto;
            filter: drop-shadow(0 20px 40px rgba(0, 0, 0, 0.3));
            animation: logoFloat 6s ease-in-out infinite;
        }

        @keyframes logoFloat {

            0%,
            100% {
                transform: translateY(0px) rotate(0deg);
            }

            50% {
                transform: translateY(-20px) rotate(5deg);
            }
        }

        .hero-badge {
            background: rgba(255, 255, 255, 0.15);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            padding: 0.7rem 1.5rem;
            border-radius: 50px;
            font-weight: 600;
            font-size: 0.9rem;
            display: inline-block;
            margin-bottom: 2rem;
            animation: pulse 2s infinite;
        }

        @keyframes pulse {

            0%,
            100% {
                transform: scale(1);
            }

            50% {
                transform: scale(1.05);
            }
        }

        .btn-hero {
            padding: 1rem 2rem;
            font-weight: 600;
            border-radius: 50px;
            text-decoration: none;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
            transition: all 0.3s ease;
            border: 2px solid transparent;
            font-size: 1.1rem;
        }

        .btn-hero-primary {
            background: #fff;
            color: var(--primary);
            box-shadow: 0 10px 30px rgba(255, 255, 255, 0.3);
        }

        .btn-hero-primary:hover {
            background: var(--light-blue);
            transform: translateY(-3px);
            box-shadow: 0 15px 40px rgba(255, 255, 255, 0.4);
            color: var(--primary);
        }

        .btn-hero-outline {
            background: transparent;
            color: #fff;
            border-color: rgba(255, 255, 255, 0.5);
        }

        .btn-hero-outline:hover {
            background: rgba(255, 255, 255, 0.1);
            border-color: #fff;
            transform: translateY(-3px);
            color: #fff;
        }

        /* Section Styles */
        .section {
            padding: 5rem 0;
            position: relative;
        }

        .section-title {
            font-size: 2.5rem;
            font-weight: 700;
            text-align: center;
            margin-bottom: 3rem;
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Card Styles */
        .card-custom {
            border: none;
            border-radius: 20px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            background: #fff;
            overflow: hidden;
            height: 100%;
        }

        .card-custom:hover {
            box-shadow: var(--shadow-hover);
            transform: translateY(-10px);
        }

        .card-icon {
            width: 80px;
            height: 80px;
            background: var(--gradient);
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #fff;
            margin: 0 auto 1.5rem;
        }

        .text-gradient {
            background: var(--gradient);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        .value-item {
            text-align: center;
            padding: 2rem 1rem;
            background: #fff;
            border-radius: 15px;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            height: 100%;
        }

        .value-item:hover {
            transform: translateY(-10px);
            box-shadow: var(--shadow-hover);
        }

        /* Newsletter Section */
        .newsletter {
            background: var(--gradient);
            color: #fff;
            position: relative;
            overflow: hidden;
        }

        .newsletter::before {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1000 1000"><defs><pattern id="grid" width="50" height="50" patternUnits="userSpaceOnUse"><path d="M 50 0 L 0 0 0 50" fill="none" stroke="rgba(255,255,255,0.05)" stroke-width="1"/></pattern></defs><rect width="100%" height="100%" fill="url(%23grid)"/></svg>');
            pointer-events: none;
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 20px;
        }

        /* Footer */
        .footer {
            background: var(--secondary);
            color: #fff;
        }

        .footer-title {
            background: linear-gradient(45deg, #fff 0%, #e8f4ff 100%);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
        }

        /* Back to Top */
        .back-to-top {
            position: fixed;
            bottom: 2rem;
            right: 2rem;
            width: 50px;
            height: 50px;
            background: var(--gradient);
            color: #fff;
            border: none;
            border-radius: 50%;
            display: none;
            align-items: center;
            justify-content: center;
            font-size: 1.2rem;
            box-shadow: var(--shadow);
            transition: all 0.3s ease;
            z-index: 1000;
        }

        .back-to-top:hover {
            transform: translateY(-3px);
            box-shadow: var(--shadow-hover);
        }

        .back-to-top.show {
            display: flex;
        }

        /* Organisasi Carousel Styles */
        #organisasi {
            padding: 100px 0;
            background: #f8fbff;
            position: relative;
            overflow: hidden;
        }

        .org-carousel-container {
            position: relative;
            height: 300px;
            overflow: hidden;
        }

        .org-row {
            display: flex;
            position: absolute;
            gap: 2rem;
            white-space: nowrap;
            animation-timing-function: linear;
            animation-iteration-count: infinite;
        }

        .org-row-1 {
            top: 0;
            animation: scrollLeft 30s linear infinite;
        }

        .org-row-2 {
            bottom: 0;
            animation: scrollRight 35s linear infinite;
        }

        @keyframes scrollLeft {
            0% {
                transform: translateX(0);
            }

            100% {
                transform: translateX(-100%);
            }
        }

        @keyframes scrollRight {
            0% {
                transform: translateX(-100%);
            }

            100% {
                transform: translateX(0);
            }
        }

        .org-item {
            flex: 0 0 auto;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
            margin: 0 1rem;
            background: #fff;
            border-radius: 20px;
            box-shadow: 0 10px 30px rgba(26, 92, 214, 0.1);
            transition: all 0.3s ease;
            min-width: 150px;
            height: 120px;
            text-align: center;
        }

        .org-item:hover {
            transform: translateY(-10px);
            box-shadow: 0 20px 40px rgba(26, 92, 214, 0.2);
        }

        .org-logo {
            width: 60px;
            height: 60px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.5rem;
            color: #fff;
            font-weight: bold;
            margin-bottom: 0.5rem;
            box-shadow: 0 5px 15px rgba(26, 92, 214, 0.3);
        }

        .org-logo img {
            width: 50px;
            height: 50px;
            border-radius: 50%;
        }

        .org-item h6 {
            margin: 0;
            font-size: 0.9rem;
            font-weight: 600;
            color: var(--primary);
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            .navbar-nav {
                display: none;
            }

            .hero {
                min-height: 90vh;
                padding-top: 2rem;
            }

            .hero-badge {
                font-size: 0.8rem;
                padding: 0.5rem 1rem;
            }

            .btn-hero {
                padding: 0.8rem 1.5rem;
                font-size: 1rem;
            }

            .section {
                padding: 3rem 0;
            }

            .section-title {
                font-size: 2rem;
            }

            .org-carousel-container {
                height: 250px;
            }

            .org-item {
                min-width: 120px;
                height: 100px;
                padding: 1rem;
                margin: 0 0.5rem;
            }

            .org-logo {
                width: 50px;
                height: 50px;
                font-size: 1.2rem;
            }

            .org-logo img {
                width: 40px;
                height: 40px;
            }

            .org-item h6 {
                font-size: 0.8rem;
            }
        }

        @media (min-width: 769px) {
            .mobile-sidebar {
                display: none;
            }
        }

        /* Scroll animations */
        .fade-up {
            opacity: 0;
            transform: translateY(30px);
            transition: all 0.6s ease;
        }

        .fade-up.active {
            opacity: 1;
            transform: translateY(0);
        }

        /* Organisasi Carousel */
        .org-carousel-wrapper {
            position: relative;
            overflow: hidden;
            width: 100%;
        }

        .org-carousel {
            display: flex;
            gap: 2rem;
            transition: transform 1.2s cubic-bezier(.77, 0, .18, 1);
            will-change: transform;
        }

        .org-item {
            background: #fff;
            border-radius: 1rem;
            padding: 1.5rem 0.5rem;
            box-shadow: var(--shadow);
            text-align: center;
            min-width: 160px;
            max-width: 180px;
            flex: 0 0 auto;
            transition: box-shadow 0.2s, transform 0.2s;
            cursor: pointer;
        }

        .org-item:hover {
            box-shadow: 0 16px 48px rgba(37, 99, 235, 0.13);
            transform: translateY(-6px) scale(1.05);
        }

        .org-logo {
            width: 70px;
            height: 70px;
            background: var(--gradient);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #fff;
            font-weight: 700;
            margin: 0 auto 1rem;
            font-size: 2rem;
            overflow: hidden;
        }

        .org-logo img {
            width: 60px;
            height: 60px;
            object-fit: cover;
        }

        .org-arrow {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            background: var(--gradient);
            color: #fff;
            border: none;
            border-radius: 50%;
            width: 44px;
            height: 44px;
            font-size: 1.5rem;
            z-index: 2;
            box-shadow: var(--shadow);
            cursor: pointer;
            opacity: 0.85;
        }

        .org-arrow.left {
            left: 0.5rem;
        }

        .org-arrow.right {
            right: 0.5rem;
        }

        .hero-image {
            background: rgba(255, 255, 255, 0.15);
            border-radius: 24px;
            padding: 80px 40px;
            text-align: center;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            min-height: 400px;
            display: flex;
            align-items: center;
            justify-content: center;
            /* Added hero image animation */
            animation: fadeInRight 1s ease-out 0.6s both;
            transition: all 0.3s ease;
        }

        .hero-image:hover {
            transform: translateY(-5px);
            box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
        }

        .hero-image-title {
            font-size: 28px;
            font-weight: 600;
            color: #1e40af;
            background: rgba(255, 255, 255, 0.9);
            padding: 24px 32px;
            border-radius: 16px;
            backdrop-filter: blur(10px);
            /* Added title animation */
            animation: scaleIn 0.8s ease-out 1.2s both;
        }
    </style>
</head>

<body>
    <!-- Animated Background -->
    <div class="animated-bg"></div>
    <div class="floating-shapes">
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
        <div class="shape"></div>
    </div>

    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#beranda">
                <img src="assets/logo.png" alt="Logo"
                    width="40" height="40" class="rounded-circle me-2">
                BEM IT DEL <small class="text-muted ms-1 d-none d-sm-inline">#SahatMarsada</small>
            </a>

            <!-- Desktop Menu -->
            <div class="d-none d-lg-block">
                <ul class="navbar-nav ms-auto align-items-center">
                    <li class="nav-item"><a class="nav-link active" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#profil">Profil</a></li>
                    <li class="nav-item"><a class="nav-link" href="#pencapaian">Pencapaian</a></li>
                    <li class="nav-item"><a class="nav-link" href="#organisasi">Organisasi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#artikel">Artikel</a></li>
                    <li class="nav-item"><a class="nav-link" href="#galeri">Galeri</a></li>
                </ul>
            </div>

            <!-- Mobile Menu Toggle -->
            <button class="navbar-toggler d-lg-none" type="button" id="sidebarToggle">
                <i class="bi bi-list fs-4"></i>
            </button>
        </div>
    </nav>

    <!-- Mobile Sidebar -->
    <div class="sidebar-overlay" id="sidebarOverlay"></div>
    <div class="mobile-sidebar" id="mobileSidebar">
        <button class="sidebar-close" id="sidebarClose">
            <i class="bi bi-x"></i>
        </button>

        <div class="sidebar-header">
            <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png" alt="Logo BEM">
            <h5 class="mb-0">BEM 2024</h5>
            <small class="opacity-75">Badan Eksekutif Mahasiswa</small>
        </div>

        <div class="sidebar-nav">
            <a class="nav-link" href="#beranda">
                <i class="bi bi-house"></i>
                Beranda
            </a>
            <a class="nav-link" href="#profil">
                <i class="bi bi-person"></i>
                Profil
            </a>
            <a class="nav-link" href="#pencapaian">
                <i class="bi bi-trophy"></i>
                Pencapaian
            </a>
            <a class="nav-link" href="#organisasi">
                <i class="bi bi-building"></i>
                Organisasi
            </a>
            <a class="nav-link" href="#artikel">
                <i class="bi bi-newspaper"></i>
                Artikel
            </a>
            <a class="nav-link" href="#galeri">
                <i class="bi bi-images"></i>
                Galeri
            </a>
            <hr class="mx-3 opacity-25">
            <a class="nav-link" href="#gabung">
                <i class="bi bi-plus-circle"></i>
                Gabung BEM
            </a>
        </div>
    </div>

    <!-- Hero Section -->
    <section id="beranda" class="hero d-flex align-items-center">
        <!-- Floating Particles -->
        <div class="hero-particle" style="left: 10%; animation-delay: 0s;"></div>
        <div class="hero-particle" style="left: 20%; animation-delay: 2s;"></div>
        <div class="hero-particle" style="left: 30%; animation-delay: 4s;"></div>
        <div class="hero-particle" style="left: 40%; animation-delay: 6s;"></div>
        <div class="hero-particle" style="left: 50%; animation-delay: 8s;"></div>
        <div class="hero-particle" style="left: 60%; animation-delay: 10s;"></div>
        <div class="hero-particle" style="left: 70%; animation-delay: 12s;"></div>
        <div class="hero-particle" style="left: 80%; animation-delay: 14s;"></div>
        <div class="hero-particle" style="left: 90%; animation-delay: 16s;"></div>

        <div class="container">
            <div class="row align-items-center gy-5">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="hero-badge">
                        <i class="bi bi-calendar me-2"></i>
                        PERIODE 2024-2025
                    </div>
                    <h1 class="hero-title">
                        Badan Eksekutif<br>
                        <span class="fw-normal">Mahasiswa</span>
                    </h1>
                    <p class="hero-subtitle">
                        Bersama Mewujudkan Aksi, Prestasi, dan Kolaborasi Mahasiswa untuk Masa Depan yang Lebih Cerah.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <a href="#profil" class="btn-hero btn-hero-primary">
                            <i class="bi bi-eye"></i>
                            Lihat Visi Misi
                        </a>
                        <a href="#pencapaian" class="btn-hero btn-hero-outline">
                            <i class="bi bi-arrow-down"></i>
                            Lihat Pencapaian
                        </a>
                    </div>
                </div>
                <div class="col-lg-4 text-center hero-image" data-aos="fade-left">
                    <div class="hero-logo">
                        <img src="assets/logo.png" alt="Logo BEM IT DEL" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Profil Section -->

    <!-- Visi Misi Section -->
    <section id="visi-misi" class="py-5">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="badge bg-primary text-white mb-3 px-3 py-2 shadow-sm">Visi & Misi</div>
                <h2 class="display-5 fw-bold text-gradient mb-4">Visi dan Misi BEM IT DEL 2025</h2>
                <p class="lead text-muted">Komitmen kami untuk memajukan kehidupan mahasiswa dan kampus Institut
                    Teknologi Del</p>
            </div>
            <div class="row g-4 mb-5">
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card card-custom h-100 p-4">
                        <div class="card-body">
                            <div class="card-icon mb-3">👁</div>
                            <h3 class="h4 fw-bold mb-3">Visi</h3>
                            <p class="text-muted">
                                Menjadi organisasi mahasiswa yang inovatif, inklusif, dan berdampak dalam mewujudkan
                                kampus
                                Institut Teknologi Del yang dinamis, mahasiswa yang berprestasi, dan kontribusi nyata
                                bagi masyarakat Toba Samosir dan sekitarnya.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card card-custom h-100 p-4">
                        <div class="card-body">
                            <div class="card-icon mb-3">🎯</div>
                            <h3 class="h4 fw-bold mb-3">Misi</h3>
                            <ul class="list-unstyled">
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Mengembangkan
                                    potensi akademik dan non-akademik mahasiswa</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Memfasilitasi
                                    aspirasi mahasiswa</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menciptakan
                                    lingkungan kampus yang kondusif</li>
                                <li class="mb-2"><i class="bi bi-check-circle-fill text-success me-2"></i>Menjalin
                                    kerjasama strategis</li>
                                <li class="mb-2"><i
                                        class="bi bi-check-circle-fill text-success me-2"></i>Mengimplementasikan
                                    program-program inovatif</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Values -->
            <div class="text-center mb-5" data-aos="fade-up">
                <h3 class="h2 fw-bold text-gradient">#SahatMarsada - Nilai-Nilai Kami</h3>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="value-item">
                        <div class="fs-1 mb-3">🤝</div>
                        <h5 class="fw-bold">Kolaborasi</h5>
                        <p class="text-muted small">Bekerja sama untuk mencapai tujuan bersama</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="value-item">
                        <div class="fs-1 mb-3">💡</div>
                        <h5 class="fw-bold">Inovasi</h5>
                        <p class="text-muted small">Menciptakan solusi kreatif dan berkelanjutan</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="value-item">
                        <div class="fs-1 mb-3">🏆</div>
                        <h5 class="fw-bold">Prestasi</h5>
                        <p class="text-muted small">Mendorong pencapaian terbaik di setiap bidang</p>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="value-item">
                        <div class="fs-1 mb-3">⭐</div>
                        <h5 class="fw-bold">Integritas</h5>
                        <p class="text-muted small">Menjunjung tinggi kejujuran dan transparansi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Agenda Section -->
    <section id="agenda" class="py-5 bg-light">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="badge bg-info text-white mb-3 px-3 py-2 shadow-sm">Agenda & Kegiatan</div>
                <h2 class="display-5 fw-bold text-gradient mb-4">Agenda BEM IT DEL</h2>
            </div>
            <div class="row g-4">
                <!-- Agenda Mendatang -->
                <div class="col-lg-6" data-aos="fade-right">
                    <div class="card card-custom p-4">
                        <h4 class="fw-bold mb-4">Agenda Mendatang</h4>
                        <div class="d-flex mb-3 p-3 bg-light rounded">
                            <div class="me-3 text-center">
                                <div class="text-primary fw-bold fs-3">15</div>
                                <div class="small text-muted">AGS</div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Seminar Nasional</h6>
                                <p class="small text-muted mb-0">Inovasi Teknologi Mahasiswa</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3 p-3 bg-light rounded">
                            <div class="me-3 text-center">
                                <div class="text-primary fw-bold fs-3">22</div>
                                <div class="small text-muted">AGS</div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Workshop</h6>
                                <p class="small text-muted mb-0">Kewirausahaan Digital</p>
                            </div>
                        </div>
                        <div class="d-flex mb-3 p-3 bg-light rounded">
                            <div class="me-3 text-center">
                                <div class="text-primary fw-bold fs-3">29</div>
                                <div class="small text-muted">AGS</div>
                            </div>
                            <div>
                                <h6 class="fw-bold mb-1">Bakti Sosial</h6>
                                <p class="small text-muted mb-0">Toba Samosir</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kalender Kegiatan -->
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="card card-custom p-4">
                        <h4 class="fw-bold mb-3">Kalender Kegiatan</h4>
                        <div class="text-center mb-3">
                            <h5 id="calendar-title" class="text-primary"></h5>
                            <div class="btn-group mb-3">
                                <button class="btn btn-sm btn-outline-primary" onclick="changeView('day')">Hari</button>
                                <button class="btn btn-sm btn-outline-primary"
                                    onclick="changeView('week')">Minggu</button>
                                <button class="btn btn-sm btn-outline-primary"
                                    onclick="changeView('month')">Bulan</button>
                                <button class="btn btn-sm btn-outline-primary"
                                    onclick="changeView('year')">Tahun</button>
                            </div>
                        </div>
                        <div id="calendar-container" class="table-responsive"></div>
                        <div class="small text-muted mt-3" id="current-time"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Organisasi Section -->
    <!-- Organisasi Section Carousel -->
    <section id="organisasi" class="py-5 position-relative">
        <div class="container py-5">
            <div class="text-center mb-5" data-aos="fade-up">
                <div class="badge bg-success text-white mb-3 px-3 py-2 shadow-sm">Organisasi Mahasiswa</div>
                <h2 class="display-5 fw-bold text-gradient mb-4">Organisasi & Unit Kegiatan</h2>
                <p class="lead text-muted">20+ Organisasi dan UKM yang bernaung di bawah BEM IT DEL</p>
            </div>
            <div class="org-carousel-wrapper" style="position:relative;overflow:hidden;">
                <button class="org-arrow left" id="orgLeft"><i class="bi bi-arrow-left"></i></button>
                <div class="org-carousel" id="orgCarousel"
                    style="display:flex;gap:2rem;transition:transform 1.2s cubic-bezier(.77,0,.18,1);will-change:transform;">
                    <div class="org-item">
                        <div class="org-logo"><img
                                src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png"
                                alt="BEM" width="60" class="rounded-circle"></div>
                        <h6 class="fw-bold small">BEM</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">DPM</div>
                        <h6 class="fw-bold small">DPM</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">SM</div>
                        <h6 class="fw-bold small">Senat Mahasiswa</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">HMT</div>
                        <h6 class="fw-bold small">HIMATIF</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">SI</div>
                        <h6 class="fw-bold small">Sistem Informasi</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">🏀</div>
                        <h6 class="fw-bold small">UKM Basket</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">⚽</div>
                        <h6 class="fw-bold small">UKM Futsal</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">🎭</div>
                        <h6 class="fw-bold small">UKM Teater</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">🎸</div>
                        <h6 class="fw-bold small">UKM Band</h6>
                    </div>
                    <div class="org-item">
                        <div class="org-logo">📸</div>
                        <h6 class="fw-bold small">UKM Fotografi</h6>
                    </div>
                </div>
                <button class="org-arrow right" id="orgRight"><i class="bi bi-arrow-right"></i></button>
            </div>
        </div>
    </section>
    <!-- Tambahkan bulat-bulat background di body -->
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>
    <div class="circle c4"></div>

    <!-- Newsletter Section -->
    <section class="newsletter py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-8" data-aos="fade-right">
                    <div class="glass-card p-5">
                        <div class="fs-1 mb-3">📧</div>
                        <h3 class="fw-bold mb-3">Langganan Newsletter</h3>
                        <p class="mb-4 opacity-75">
                            Dapatkan berita dan informasi terbaru BEM IT DEL 2025 langsung ke email Anda!
                        </p>
                        <form class="d-flex gap-3" id="newsletter-form">
                            <input type="email"
                                class="form-control form-control-lg bg-transparent text-white border-white"
                                placeholder="Masukkan email Anda" required>
                            <button type="submit" class="btn btn-light btn-lg px-4">Subscribe</button>
                        </form>
                        <div class="mt-3 text-success fw-bold" id="newsletter-confirm" style="display:none;">
                            Terima kasih telah berlangganan!
                        </div>
                    </div>
                </div>
                <div class="col-lg-4" data-aos="fade-left">
                    <div class="card card-custom p-4">
                        <h5 class="fw-bold mb-4">Tautan Cepat</h5>
                        <div class="d-grid gap-2">
                            <a href="#visi-misi" class="btn btn-outline-primary btn-sm text-start">
                                <i class="bi bi-clipboard-data me-2"></i>Visi & Misi
                            </a>
                            <a href="#organisasi" class="btn btn-outline-primary btn-sm text-start">
                                <i class="bi bi-building me-2"></i>Struktur Organisasi
                            </a>
                            <a href="#agenda" class="btn btn-outline-primary btn-sm text-start">
                                <i class="bi bi-calendar-event me-2"></i>Agenda Kegiatan
                            </a>
                            <a href="#beasiswa" class="btn btn-outline-primary btn-sm text-start">
                                <i class="bi bi-mortarboard me-2"></i>Informasi Beasiswa
                            </a>
                            <a href="#galeri" class="btn btn-outline-primary btn-sm text-start">
                                <i class="bi bi-images me-2"></i>Galeri Foto
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer py-5" id="kontak">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="d-flex align-items-center mb-4">
                        <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png"
                            alt="Logo" width="60" class="rounded-circle me-3">
                        <h4 class="footer-title fw-bold mb-0">BEM IT DEL 2025</h4>
                    </div>
                    <p class="opacity-75 mb-2">
                        Institut Teknologi Del<br>
                        Jl. Sisingamangaraja, Sitoluama<br>
                        Laguboti, Toba Samosir<br>
                        Sumatera Utara 22381
                    </p>
                    <div class="d-flex gap-3 mt-4">
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i
                                class="bi bi-facebook"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i
                                class="bi bi-instagram"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i
                                class="bi bi-twitter"></i></a>
                        <a href="#" class="btn btn-outline-light btn-sm rounded-circle"><i
                                class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">Kontak Kami</h5>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-envelope me-3 text-primary"></i>
                        <span>bem@del.ac.id</span>
                    </div>
                    <div class="d-flex align-items-center mb-3">
                        <i class="bi bi-phone me-3 text-primary"></i>
                        <span>+62 812-3456-7890</span>
                    </div>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-globe me-3 text-primary"></i>
                        <span>www.bemitdel.ac.id</span>
                    </div>
                </div>
                <div class="col-lg-4">
                    <h5 class="fw-bold mb-4">Menu</h5>
                    <div class="d-grid gap-2">
                        <a href="#beranda" class="text-decoration-none text-white-50">Beranda</a>
                        <a href="#visi-misi" class="text-decoration-none text-white-50">Visi & Misi</a>
                        <a href="#agenda" class="text-decoration-none text-white-50">Agenda</a>
                        <a href="#organisasi" class="text-decoration-none text-white-50">Organisasi</a>
                        <a href="#kontak" class="text-decoration-none text-white-50">Kontak</a>
                    </div>
                </div>
            </div>
            <hr class="my-4">
            <div class="text-center">
                <p class="mb-0 opacity-50">&copy; 2025 BEM IT DEL. All rights reserved. #SahatMarsada</p>
            </div>
        </div>
    </footer>

    <!-- Back to Top -->
    <button class="back-to-top" id="backToTop">
        <i class="bi bi-arrow-up"></i>
    </button>


    <!-- Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script>
    <!-- AOS JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script>

        // Initialize AOS
        AOS.init({
            duration: 800,
            easing: 'ease-out-cubic',
            once: true
        });

        // Navbar scroll effect
        window.addEventListener('scroll', () => {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile sidebar functionality
        const sidebarToggle = document.getElementById('sidebarToggle');
        const mobileSidebar = document.getElementById('mobileSidebar');
        const sidebarOverlay = document.getElementById('sidebarOverlay');
        const sidebarClose = document.getElementById('sidebarClose');

        function openSidebar() {
            mobileSidebar.classList.add('active');
            sidebarOverlay.classList.add('active');
            document.body.style.overflow = 'hidden';
        }

        function closeSidebar() {
            mobileSidebar.classList.remove('active');
            sidebarOverlay.classList.remove('active');
            document.body.style.overflow = '';
        }

        sidebarToggle.addEventListener('click', openSidebar);
        sidebarClose.addEventListener('click', closeSidebar);
        sidebarOverlay.addEventListener('click', closeSidebar);

        // Close sidebar when clicking on nav links
        document.querySelectorAll('.sidebar-nav .nav-link').forEach(link => {
            link.addEventListener('click', closeSidebar);
        });

        // Smooth scrolling
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                const target = document.querySelector(this.getAttribute('href'));
                if (target) {
                    target.scrollIntoView({
                        behavior: 'smooth',
                        block: 'start'
                    });
                }
            });
        });

        // Scroll animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.classList.add('active');
                }
            });
        }, observerOptions);

        document.querySelectorAll('.fade-up').forEach(el => {
            observer.observe(el);
        });

        // Active nav link
        window.addEventListener('scroll', () => {
            let current = '';
            const sections = document.querySelectorAll('section');

            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;
                if (scrollY >= (sectionTop - 200)) {
                    current = section.getAttribute('id');
                }
            });

            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('active');
                if (link.getAttribute('href') === '#' + current) {
                    link.classList.add('active');
                }
            });
        });
    </script>

    <script>
        // AOS Animation
        AOS.init({ once: true, duration: 700 });

        // Back to Top
        const backToTop = document.getElementById('backToTop');
        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
                backToTop.classList.add('show');
            } else {
                backToTop.classList.remove('show');
            }
        });
        backToTop.addEventListener('click', () => {
            window.scrollTo({ top: 0, behavior: 'smooth' });
        });

        // Newsletter Form
        document.getElementById('newsletter-form').addEventListener('submit', function (e) {
            e.preventDefault();
            document.getElementById('newsletter-confirm').style.display = 'block';
            setTimeout(() => {
                document.getElementById('newsletter-confirm').style.display = 'none';
            }, 3500);
            this.reset();
        });

        // Kalender Kegiatan (Agustus 2025)

    </script>
    <script>
        // Carousel Organisasi dua arah otomatis
        const orgCarousel = document.getElementById('orgCarousel');
        let orgIndex = 0;
        let orgDirection = 1;
        const orgItemCount = orgCarousel.children.length;
        function getVisible() {
            if (window.innerWidth < 576) return 2;
            if (window.innerWidth < 992) return 4;
            return 6;
        }
        function updateCarousel() {
            orgCarousel.style.transform = `translateX(-${orgIndex * (orgCarousel.children[0].offsetWidth + 32)}px)`;
        }

        function nextOrg() {
            const orgVisible = getVisible();
            orgIndex += orgDirection;
            if (orgIndex > orgItemCount - orgVisible) {
                orgDirection = -1;
                orgIndex = orgItemCount - orgVisible;
            }
            if (orgIndex < 0) {
                orgDirection = 1;
                orgIndex = 0;
            }
            updateCarousel();
        }
        document.getElementById('orgLeft').onclick = () => { orgDirection = -1; nextOrg(); };
        document.getElementById('orgRight').onclick = () => { orgDirection = 1; nextOrg(); };
        setInterval(nextOrg, 2500);
        window.addEventListener('resize', updateCarousel);
        updateCarousel();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
    <script>
        let currentView = "month";

        function renderCalendar() {
            const container = document.getElementById("calendar-container");
            const title = document.getElementById("calendar-title");
            const now = new Date();
            container.innerHTML = "";

            if (currentView === "day") {
                title.textContent = moment(now).format("dddd, DD MMMM YYYY");
                container.innerHTML = `<p class="fw-bold">Agenda Hari Ini</p>`;
            }

            if (currentView === "week") {
                title.textContent = "Minggu ke-" + moment(now).week() + " " + now.getFullYear();
                let table = `<table class="table table-sm"><thead><tr>`;
                ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"].forEach(d => table += `<th>${d}</th>`);
                table += "</tr></thead><tbody><tr>";
                for (let i = 0; i < 7; i++) {
                    let day = moment(now).startOf("week").add(i, "days");
                    table += `<td>${day.date()}</td>`;
                }
                table += "</tr></tbody></table>";
                container.innerHTML = table;
            }

            if (currentView === "month") {
                const month = now.getMonth();
                const year = now.getFullYear();
                title.textContent = moment(now).format("MMMM YYYY");
                const daysInMonth = new Date(year, month + 1, 0).getDate();
                const firstDay = new Date(year, month, 1).getDay();

                let table = `<table class="table table-sm"><thead><tr>`;
                ["Min", "Sen", "Sel", "Rab", "Kam", "Jum", "Sab"].forEach(d => table += `<th>${d}</th>`);
                table += "</tr></thead><tbody>";

                let date = 1;
                for (let i = 0; i < 6; i++) {
                    table += "<tr>";
                    for (let j = 0; j < 7; j++) {
                        if (i === 0 && j < firstDay) {
                            table += "<td></td>";
                        } else if (date > daysInMonth) {
                            table += "<td></td>";
                        } else {
                            let classes = "";
                            if ([15, 22, 29].includes(date)) classes = "bg-primary text-white fw-bold";
                            if (date === now.getDate()) classes = "bg-info text-white fw-bold";
                            table += `<td class="${classes}">${date}</td>`;
                            date++;
                        }
                    }
                    table += "</tr>";
                    if (date > daysInMonth) break;
                }
                table += "</tbody></table>";
                container.innerHTML = table;
            }

            if (currentView === "year") {
                title.textContent = now.getFullYear();
                let table = `<div class="row">`;
                for (let m = 0; m < 12; m++) {
                    table += `<div class="col-6 col-md-4 mb-3"><div class="border p-2 rounded"><h6 class="text-primary text-center">${moment().month(m).format("MMMM")}</h6>`;
                    const days = new Date(now.getFullYear(), m + 1, 0).getDate();
                    table += "<div class='d-flex flex-wrap'>";
                    for (let d = 1; d <= days; d++) {
                        table += `<span class="small px-1">${d}</span>`;
                    }
                    table += "</div></div></div>";
                }
                table += "</div>";
                container.innerHTML = table;
            }
        }

        function changeView(view) {
            currentView = view;
            renderCalendar();
        }

        setInterval(() => {
            document.getElementById("current-time").textContent = moment().format("dddd, DD MMMM YYYY - HH:mm:ss");
        }, 1000);

        renderCalendar();
    </script>
</body>

</html>