<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM 2024 - Institut Teknologi Del</title>
     <link rel="stylesheet" href="css/dokumentasi.css">
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="header-container">
            <div class="logo">
                <div class="logo-icon">BEM</div>
                <div class="logo-text">
                    <h1>BEM 2024</h1>
                    <p>Institut Teknologi Del</p>
                </div>
            </div>
            <nav>
                <ul class="nav">
                    <li><a href="#" class="active">Beranda</a></li>
                    <li><a href="#">Profil</a></li>
                    <li><a href="#">Organisasi</a></li>
                    <li><a href="#">Galeri</a></li>
                    <li><a href="#">Artikel</a></li>
                    <li><a href="#">Pengumuman</a></li>
                    
                </ul>
            </nav>
            <button class="login-btn">Login Portal</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-decorations">
            <div class="folder-icon">📁</div>
            <div class="decorative-dots">
                <div class="dot cyan"></div>
                <div class="dot pink"></div>
                <div class="center-logo"></div>
            </div>
        </div>
        <p class="hero-subtitle">Galeri Kegiatan</p>
        <h1 class="hero-title">Dokumentasi Perjalanan BEM IT DEL</h1>
        <p class="hero-description">
            Momen-momen berharga dalam setiap kegiatan dan pencapaian organisasi mahasiswa terdepan
        </p>
        
    </section>

    

    <!-- Gallery Section -->
    <section class="gallery-section">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Koleksi Galeri Kegiatan</h2>
                <p class="section-subtitle">
                    Jelajahi dokumentasi lengkap kegiatan BEM IT DEL melalui koleksi foto dan album yang tersedia
                </p>
            </div>

            <div class="filter-controls">
                <button class="filter-btn active" data-filter="all">Semua Album</button>
                <button class="filter-btn" data-filter="seminar">Seminar</button>
                <button class="filter-btn" data-filter="workshop">Workshop</button>
                <button class="filter-btn" data-filter="kompetisi">Kompetisi</button>
                <button class="filter-btn" data-filter="wisuda">Wisuda</button>
            </div>

            <div class="search-container">
                <input type="text" class="search-box" placeholder="🔍 Cari galeri kegiatan...">
            </div>

            <h3 style="font-size: 1.8rem; font-weight: 700; color: #2563eb; margin-bottom: 2rem;">Galeri Unggulan</h3>
            
            <div class="gallery-grid">
                <div class="gallery-card" data-category="seminar">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Seminar Tech</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Seminar Nasional Teknologi</h4>
                        <p class="card-description">
                            Dokumentasi seminar nasional teknologi dan inovasi yang diselenggarakan BEM IT DEL dengan pembicara terkemuka di bidang teknologi.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 1.2k</span>
                            <span class="stat-item">❤️ 89</span>
                            <span class="stat-item">💬 12</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="kompetisi">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M9 11H7v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-9h-2m-7 0V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5m-6 0h6m-5-3v.01M14 8v.01"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Programming Contest</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Kompetisi Programming</h4>
                        <p class="card-description">
                            Arena kompetisi programming dan hackathon tingkat nasional dengan peserta dari berbagai universitas terkemuka di Indonesia.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 956</span>
                            <span class="stat-item">❤️ 67</span>
                            <span class="stat-item">💬 8</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="workshop">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Tech Workshop</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Workshop Teknologi</h4>
                        <p class="card-description">
                            Pelatihan dan workshop pengembangan skill teknologi untuk mahasiswa dengan materi praktis dan aplikatif.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 1.5k</span>
                            <span class="stat-item">❤️ 124</span>
                            <span class="stat-item">💬 18</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>
            </div>

            <!-- Semua Galeri section -->
            <div class="section-divider">
                <h3 style="font-size: 1.8rem; font-weight: 700; color: #2563eb;">Semua Galeri</h3>
                <span class="gallery-count">6 galeri ditampilkan</span>
            </div>

            <div class="gallery-grid">
                <div class="gallery-card" data-category="seminar">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M12 2l3.09 6.26L22 9.27l-5 4.87 1.18 6.88L12 17.77l-6.18 3.25L7 14.14 2 9.27l6.91-1.01L12 2z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Seminar Tech</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Seminar Nasional Teknologi</h4>
                        <p class="card-description">
                            Dokumentasi seminar nasional teknologi dan inovasi yang diselenggarakan BEM IT DEL dengan pembicara terkemuka.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 1.2k</span>
                            <span class="stat-item">❤️ 89</span>
                            <span class="stat-item">💬 12</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="kompetisi">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M9 11H7v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-9h-2m-7 0V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5m-6 0h6m-5-3v.01M14 8v.01"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Programming Contest</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Kompetisi Programming</h4>
                        <p class="card-description">
                            Arena kompetisi programming dan hackathon tingkat nasional dengan peserta dari berbagai universitas terkemuka.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 956</span>
                            <span class="stat-item">❤️ 67</span>
                            <span class="stat-item">💬 8</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="workshop">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 15l-5-5 1.41-1.41L10 14.17l7.59-7.59L19 8l-9 9z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Tech Workshop</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Workshop Teknologi</h4>
                        <p class="card-description">
                            Pelatihan dan workshop pengembangan skill teknologi untuk mahasiswa dengan materi praktis dan aplikatif.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 1.5k</span>
                            <span class="stat-item">❤️ 124</span>
                            <span class="stat-item">💬 18</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="wisuda">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1zM9 4c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Graduation</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Wisuda & Pelantikan</h4>
                        <p class="card-description">
                            Momen bersejarah wisuda mahasiswa dan pelantikan pengurus BEM IT DEL periode terbaru dengan suasana penuh kebanggaan.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 2.1k</span>
                            <span class="stat-item">❤️ 156</span>
                            <span class="stat-item">💬 24</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="seminar">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M20 6h-2.18c.11-.31.18-.65.18-1a2.996 2.996 0 0 0-5.5-1.65l-.5.67-.5-.68C10.96 2.54 10.05 2 9 2 7.34 2 6 3.34 6 5c0 .35.07.69.18 1H4c-1.11 0-1.99.89-1.99 2L2 19c0 1.11.89 2 2 2h16c1.11 0 2-.89 2-2V8c0-1.11-.89-2-2-2zm-5-2c.55 0 1 .45 1 1s-.45 1-1 1-1-.45-1-1 .45-1 1-1z"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Tech Talk</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Tech Talk Series</h4>
                        <p class="card-description">
                            Seri diskusi teknologi dengan para ahli dan praktisi industri untuk berbagi insight dan pengalaman terkini.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 834</span>
                            <span class="stat-item">❤️ 45</span>
                            <span class="stat-item">💬 7</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>

                <div class="gallery-card" data-category="kompetisi">
                    <div class="card-header">
                        <div class="card-icon">
                            <svg width="30" height="30" viewBox="0 0 24 24" fill="white">
                                <path d="M9 11H7v9a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2v-9h-2m-7 0V6a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v5m-6 0h6m-5-3v.01M14 8v.01"/>
                            </svg>
                        </div>
                        <h3 class="card-title">Hackathon</h3>
                    </div>
                    <div class="card-body">
                        <h4 class="card-subtitle">Hackathon 2024</h4>
                        <p class="card-description">
                            Kompetisi hackathon 48 jam non-stop dengan tema inovasi teknologi untuk solusi permasalahan sosial dan industri.
                        </p>
                        <div class="card-stats">
                            <span class="stat-item">👁️ 1.8k</span>
                            <span class="stat-item">❤️ 98</span>
                            <span class="stat-item">💬 15</span>
                        </div>
                        <button class="card-button">Lihat Detail</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
<!-- Testimonials Section -->
    <section class="testimonials">
        <div class="testimonials-container">
            <div class="testimonials-header">
                <h2 class="testimonials-title">Testimoni Alumni</h2>
                <p class="testimonials-subtitle">
                    Dengarkan cerita sukses alumni BEM IT DEL yang telah berkarir di perusahaan teknologi terkemuka
                </p>
            </div>

            <div class="testimonials-grid">
                <div class="testimonial-card">
                    <div class="testimonial-avatar avatar-bs">BS</div>
                    <h3 class="testimonial-name">Budi Santoso</h3>
                    <p class="testimonial-role">Product Manager, Tokopedia</p>
                    <p class="testimonial-experience">Pengalaman • 5 tahun</p>
                    <p class="testimonial-quote">
                        BEM IT DEL mengajarkan saya pentingnya kolaborasi dan inovasi. 
                        Pengalaman memimpin proyek di organisasi ini sangat membantu 
                        karir saya sebagai Product Manager di Tokopedia.
                    </p>
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar avatar-lp">LP</div>
                    <h3 class="testimonial-name">Lisa Purnama</h3>
                    <p class="testimonial-role">Software Engineer, Gojek</p>
                    <p class="testimonial-experience">Pengalaman • 3 tahun</p>
                    <p class="testimonial-quote">
                        Menjadi bagian BEM IT DEL sangat supportive dan inspiratif. Semua 
                        mentor senior yang memberikan guidance terbaik untuk 
                        mengembangkan skill programming saya.
                    </p>
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>

                <div class="testimonial-card">
                    <div class="testimonial-avatar avatar-ap">AP</div>
                    <h3 class="testimonial-name">Andi Pratama</h3>
                    <p class="testimonial-role">Data Scientist, Bukalapak</p>
                    <p class="testimonial-experience">Pengalaman • 4 tahun</p>
                    <p class="testimonial-quote">
                        Saat menjadi teknologi yang dikembangkan BEM IT DEL, selalu 
                        terdepan hingga Exposure ke berbagai teknologi terbaru 
                        membantu saya memahami career development.
                    </p>
                    <div class="testimonial-rating">
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                        <span class="star">★</span>
                    </div>
                </div>
            </div>

            <div class="testimonial-nav">
                <div class="nav-dot active"></div>
                <div class="nav-dot"></div>
                <div class="nav-dot"></div>
            </div>
        </div>
    </section>
    <!-- Footer Section -->
    <footer class="footer">
        <div class="footer-container">
            <div class="footer-content">
                <!-- Logo and Description -->
                <div class="footer-section">
                    <div class="footer-logo">
                        <div class="footer-logo-icon">BEM</div>
                        <div class="footer-logo-text">
                            <h3>BEM IT DEL</h3>
                            <p>Organisasi Mahasiswa</p>
                        </div>
                    </div>
                    <p class="footer-description">
                        Membangun generasi dengan visi dan misi yang kuat untuk kemajuan teknologi dan inovasi berkelanjutan.
                    </p>
                    <div class="social-icons">
                        <a href="#" class="social-icon twitter">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M23 3a10.9 10.9 0 01-3.14 1.53 4.48 4.48 0 00-7.86 3v1A10.66 10.66 0 013 4s-4 9 5 13a11.64 11.64 0 01-7 2c9 5 20 0 20-11.5a4.5 4.5 0 00-.08-.83A7.72 7.72 0 0023 3z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon facebook">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon instagram">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <rect x="2" y="2" width="20" height="20" rx="5" ry="5"/>
                                <path d="m16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"/>
                                <line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/>
                            </svg>
                        </a>
                        <a href="#" class="social-icon linkedin">
                            <svg width="20" height="20" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M16 8a6 6 0 016 6v7h-4v-7a2 2 0 00-2-2 2 2 0 00-2 2v7h-4v-7a6 6 0 016-6z"/>
                                <rect x="2" y="9" width="4" height="12"/>
                                <circle cx="4" cy="4" r="2"/>
                            </svg>
                        </a>
                    </div>
                </div>

                <!-- Organisasi Links -->
                <div class="footer-section">
                    <h4>Organisasi</h4>
                    <ul class="footer-links">
                        <li><a href="#">Organisasi BEM</a></li>
                        <li><a href="#">Kementerian Mahasiswa</a></li>
                        <li><a href="#">Unit Kegiatan Mahasiswa</a></li>
                        <li><a href="#">Badan Eksekutif</a></li>
                        <li><a href="#">Senat Mahasiswa</a></li>
                    </ul>
                </div>

                <!-- Layanan Links -->
                <div class="footer-section">
                    <h4>Layanan</h4>
                    <ul class="footer-links">
                        <li><a href="#">Berita Mahasiswa</a></li>
                        <li><a href="#">Pengumuman</a></li>
                        <li><a href="#">Open Registrasi</a></li>
                        <li><a href="#">Event</a></li>
                        <li><a href="#">Kontak</a></li>
                    </ul>
                </div>

                <!-- Kontak Kami -->
                <div class="footer-section">
                    <h4>Kontak Kami</h4>
                    <div class="contact-info">
                        <div class="contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M21 10c0 7-9 13-9 13s-9-6-9-13a9 9 0 0118 0z"/>
                                <circle cx="12" cy="10" r="3"/>
                            </svg>
                            <span>Jl. Sisingamangaraja, Sitoluama<br>Laguboti, Toba Samosir 22381</span>
                        </div>
                        <div class="contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M22 16.92v3a2 2 0 01-2.18 2 19.79 19.79 0 01-8.63-3.07 19.5 19.5 0 01-6-6 19.79 19.79 0 01-3.07-8.67A2 2 0 014.11 2h3a2 2 0 012 1.72 12.84 12.84 0 00.7 2.81 2 2 0 01-.45 2.11L8.09 9.91a16 16 0 006 6l1.27-1.27a2 2 0 012.11-.45 12.84 12.84 0 002.81.7A2 2 0 0122 16.92z"/>
                            </svg>
                            <span>+62 632 331 1234</span>
                        </div>
                        <div class="contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/>
                                <polyline points="22,6 12,13 2,6"/>
                            </svg>
                            <span>bem@del.ac.id</span>
                        </div>
                        <div class="contact-item">
                            <svg width="16" height="16" viewBox="0 0 24 24" fill="currentColor">
                                <circle cx="12" cy="12" r="10"/>
                                <polyline points="12,6 12,12 16,14"/>
                            </svg>
                            <span>Sen-Jum 08:00 - 17:00</span>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Footer Bottom -->
            <div class="footer-bottom">
                <div class="footer-bottom-content">
                    <p>&copy; 2024 BEM IT DEL. Hak Cipta Dilindungi</p>
                    <div class="footer-bottom-links">
                        <a href="#">Kebijakan Privasi</a>
                        <a href="#">Syarat & Ketentuan</a>
                        <a href="#">Sitemap</a>
                        <a href="#">Bantuan</a>
                    </div>
                </div>
            </div>
        </div>
    </footer>

   <script src="js/dokumeentasi.js"></script>
</body>
</html>
