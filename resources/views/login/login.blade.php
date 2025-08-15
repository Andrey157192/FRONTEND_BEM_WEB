<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal BEM IT Del - Login</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="css/login.css">
</head>
<body>
    <!-- Background Lingkaran -->
    <div class="circle c1"></div>
    <div class="circle c2"></div>
    <div class="circle c3"></div>
    <div class="circle c4"></div>

    <!-- Card Login -->
    <div class="login-card" id="loginCard">
        <div class="logo-box"><span>DEL</span></div>
        <h2 class="welcome-title">Selamat Datang</h2>
        <p class="welcome-subtitle">Portal BEM IT Del</p>
        <p class="welcome-description">Masuk ke Sistem Informasi Badan<br>Eksekutif Mahasiswa Institut Teknologi Del</p>

        <form id="loginForm">
            <div class="mb-3 position-relative">
                <i class="fas fa-user input-icon"></i>
                <input type="text" id="username" class="form-control" 
                       placeholder="Masukkan username BEM Anda">
            </div>
            <div class="mb-3 position-relative">
                <i class="fas fa-lock input-icon"></i>
                <input type="password" id="password" class="form-control" 
                       placeholder="Masukkan password BEM Anda">
                <button type="button" class="password-toggle" onclick="togglePassword()">
                    <i class="fas fa-eye" id="eyeIcon"></i>
                </button>
            </div>
            <div class="d-flex justify-content-between align-items-center mb-3">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
                <a href="#" class="forgot-password">Lupa password?</a>
            </div>
            <button type="submit" class="btn btn-login w-100">
                <i class="fas fa-sign-in-alt me-2"></i>Masuk ke Portal
            </button>
        </form>

        <div class="footer-text">
            © 2024 BEM Institut Teknologi Del<br>
            Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba Samosir<br>
            Sumatera Utara 22381, Indonesia
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/toastify-js"></script>
    <script src="js/login.js"></script>
</body>
</html>