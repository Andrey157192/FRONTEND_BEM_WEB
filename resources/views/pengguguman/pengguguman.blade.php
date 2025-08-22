<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM 2024 - Pengumuman Terkini</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
        }

        /* Header */
        .header {
            background: white;
            padding: 1rem 2rem;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            position: sticky;
            top: 0;
            z-index: 100;
        }

        .nav-container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1200px;
            margin: 0 auto;
        }

        .logo {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .logo-icon {
            background: #4285f4;
            color: white;
            width: 40px;
            height: 40px;
            border-radius: 8px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
        }

        .logo-text h1 {
            font-size: 1.2rem;
            color: #333;
        }

        .logo-text p {
            font-size: 0.8rem;
            color: #666;
        }

        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2rem;
            align-items: center;
        }

        .nav-menu a {
            text-decoration: none;
            color: #666;
            font-weight: 500;
            transition: color 0.3s;
        }

        .nav-menu a:hover, .nav-menu a.active {
            color: #4285f4;
        }

        .login-btn {
            background: #4285f4;
            color: white;
            padding: 0.5rem 1.5rem;
            border: none;
            border-radius: 6px;
            font-weight: 500;
            cursor: pointer;
            transition: background 0.3s;
        }

        .login-btn:hover {
            background: #3367d6;
        }

        /* Hero Section */
        .hero {
            background: linear-gradient(135deg, #4285f4 0%, #6366f1 100%);
            padding: 4rem 2rem;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        .hero::before {
            content: '';
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 100 100"><circle cx="20" cy="20" r="20" fill="rgba(255,255,255,0.1)"/><circle cx="80" cy="80" r="30" fill="rgba(255,255,255,0.05)"/><circle cx="70" cy="20" r="15" fill="rgba(255,255,255,0.08)"/></svg>');
            animation: float 20s infinite linear;
        }

        @keyframes float {
            0% { transform: translate(-50%, -50%) rotate(0deg); }
            100% { transform: translate(-50%, -50%) rotate(360deg); }
        }

        .hero-content {
            position: relative;
            z-index: 2;
            max-width: 800px;
            margin: 0 auto;
        }

        .hero-icon {
            background: rgba(255,255,255,0.2);
            width: 80px;
            height: 80px;
            border-radius: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 2rem;
            backdrop-filter: blur(10px);
        }

        .hero h1 {
            color: white;
            font-size: 3rem;
            margin-bottom: 1rem;
            font-weight: 700;
        }

        .hero p {
            color: rgba(255,255,255,0.9);
            font-size: 1.1rem;
            margin-bottom: 3rem;
            line-height: 1.6;
        }

        .filter-buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
            margin-bottom: 2rem;
            flex-wrap: wrap;
        }

        .filter-btn {
            padding: 0.7rem 1.5rem;
            border: 2px solid rgba(255,255,255,0.3);
            background: rgba(255,255,255,0.1);
            color: white;
            border-radius: 25px;
            cursor: pointer;
            transition: all 0.3s;
            backdrop-filter: blur(10px);
        }

        .filter-btn.active, .filter-btn:hover {
            background: white;
            color: #4285f4;
            border-color: white;
        }

        .search-container {
            max-width: 500px;
            margin: 0 auto;
            position: relative;
        }

        .search-input {
            width: 100%;
            padding: 1rem 1.5rem;
            border: none;
            border-radius: 25px;
            font-size: 1rem;
            outline: none;
            box-shadow: 0 4px 20px rgba(0,0,0,0.1);
        }

        .search-btn {
            position: absolute;
            right: 10px;
            top: 50%;
            transform: translateY(-50%);
            background: #4285f4;
            color: white;
            border: none;
            width: 40px;
            height: 40px;
            border-radius: 50%;
            cursor: pointer;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        /* Main Content */
        .main-content {
            max-width: 1200px;
            margin: 0 auto;
            padding: 4rem 2rem;
        }

        .section-title {
            text-align: center;
            margin-bottom: 3rem;
        }

        .section-title h2 {
            color: #4285f4;
            font-size: 2.5rem;
            margin-bottom: 1rem;
            position: relative;
        }

        .section-title h2::after {
            content: '';
            position: absolute;
            bottom: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 60px;
            height: 4px;
            background: #4285f4;
            border-radius: 2px;
        }

        .section-title p {
            color: #666;
            font-size: 1.1rem;
        }

        .announcements-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(350px, 1fr));
            gap: 2rem;
            margin-top: 3rem;
        }

        .announcement-card {
            background: white;
            border-radius: 12px;
            padding: 1.5rem;
            box-shadow: 0 4px 20px rgba(0,0,0,0.08);
            transition: transform 0.3s, box-shadow 0.3s;
            position: relative;
        }

        .announcement-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 30px rgba(0,0,0,0.12);
        }

        .card-header {
            display: flex;
            align-items: center;
            gap: 1rem;
            margin-bottom: 1rem;
        }

        .org-icon {
            width: 50px;
            height: 50px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-weight: bold;
        }

        .org-icon.bem { background: #4285f4; }
        .org-icon.himatif { background: #ff9800; }
        .org-icon.ukm { background: #f44336; }
        .org-icon.himatera { background: #4caf50; }

        .card-meta {
            flex: 1;
        }

        .org-name {
            font-weight: 600;
            color: #333;
            margin-bottom: 0.25rem;
        }

        .card-date {
            color: #666;
            font-size: 0.9rem;
        }

        .priority-badge {
            padding: 0.25rem 0.75rem;
            border-radius: 15px;
            font-size: 0.8rem;
            font-weight: 500;
        }

        .priority-tinggi {
            background: #ffebee;
            color: #f44336;
        }

        .priority-sedang {
            background: #fff3e0;
            color: #ff9800;
        }

        .priority-rendah {
            background: #e8f5e8;
            color: #4caf50;
        }

        .card-title {
            color: #4285f4;
            font-size: 1.2rem;
            font-weight: 600;
            margin-bottom: 0.75rem;
            line-height: 1.4;
        }

        .card-description {
            color: #666;
            line-height: 1.6;
            margin-bottom: 1.5rem;
        }

        .card-actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .read-more-btn {
            background: #4285f4;
            color: white;
            padding: 0.6rem 1.5rem;
            border: none;
            border-radius: 6px;
            cursor: pointer;
            font-weight: 500;
            transition: background 0.3s;
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .read-more-btn:hover {
            background: #3367d6;
        }

        .card-icons {
            display: flex;
            gap: 0.5rem;
        }

        .card-icon {
            width: 35px;
            height: 35px;
            border: 1px solid #e0e0e0;
            border-radius: 6px;
            display: flex;
            align-items: center;
            justify-content: center;
            color: #666;
            cursor: pointer;
            transition: all 0.3s;
        }

        .card-icon:hover {
            background: #f5f5f5;
            color: #4285f4;
        }

        /* Priority Legend */
        .priority-legend {
            display: flex;
            justify-content: center;
            gap: 2rem;
            margin-top: 3rem;
            flex-wrap: wrap;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }

        .legend-dot {
            width: 12px;
            height: 12px;
            border-radius: 50%;
        }

        .legend-dot.tinggi { background: #f44336; }
        .legend-dot.sedang { background: #ff9800; }
        .legend-dot.rendah { background: #4caf50; }

        /* Footer */
        .footer {
            background: #1a237e;
            color: white;
            padding: 3rem 2rem 1rem;
        }

        .footer-content {
            max-width: 1200px;
            margin: 0 auto;
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 2rem;
        }

        .footer-section h3 {
            margin-bottom: 1rem;
            color: #fff;
        }

        .footer-section ul {
            list-style: none;
        }

        .footer-section ul li {
            margin-bottom: 0.5rem;
        }

        .footer-section ul li a {
            color: rgba(255,255,255,0.8);
            text-decoration: none;
            transition: color 0.3s;
        }

        .footer-section ul li a:hover {
            color: white;
        }

        .social-icons {
            display: flex;
            gap: 1rem;
            margin-top: 1rem;
        }

        .social-icon {
            width: 40px;
            height: 40px;
            background: rgba(255,255,255,0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            text-decoration: none;
            transition: background 0.3s;
        }

        .social-icon:hover {
            background: rgba(255,255,255,0.2);
        }

        .footer-bottom {
            text-align: center;
            margin-top: 2rem;
            padding-top: 2rem;
            border-top: 1px solid rgba(255,255,255,0.1);
            color: rgba(255,255,255,0.7);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .nav-menu {
                display: none;
            }

            .hero h1 {
                font-size: 2rem;
            }

            .filter-buttons {
                gap: 0.5rem;
            }

            .announcements-grid {
                grid-template-columns: 1fr;
            }

            .priority-legend {
                gap: 1rem;
            }
        }
    </style>
</head>
<body>
    <!-- Header -->
    <header class="header">
        <div class="nav-container">
            <div class="logo">
                <div class="logo-icon">BEM</div>
                <div class="logo-text">
                    <h1>BEM 2024</h1>
                    <p>Institut Teknologi Del</p>
                </div>
            </div>
            <nav>
                <ul class="nav-menu">
                    <li><a href="#" class="nav-link">Beranda</a></li>
                    <li><a href="#" class="nav-link">Profil</a></li>
                    <li><a href="#" class="nav-link">Organisasi</a></li>
                    <li><a href="#" class="nav-link">Galeri</a></li>
                    <li><a href="#" class="nav-link">Artikel</a></li>
                    <li><a href="#" class="nav-link active">Pengumuman</a></li>
                    <li><a href="#" class="nav-link">Kontak</a></li>
                </ul>
            </nav>
            <button class="login-btn">Login Portal</button>
        </div>
    </header>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-icon">
                <i class="fas fa-bullhorn" style="font-size: 2rem; color: white;"></i>
            </div>
            <h1>Pengumuman Terkini</h1>
            <p>Informasi terbaru dari berbagai organisasi mahasiswa Institut Teknologi Del untuk mendukung pengembangan akademik dan non-akademik</p>
            
            <div class="filter-buttons">
                <button class="filter-btn active" data-filter="all">
                    <i class="fas fa-list"></i> Semua
                </button>
                <button class="filter-btn" data-filter="bem">
                    <i class="fas fa-users"></i> BEM
                </button>
                <button class="filter-btn" data-filter="himpunan">
                    <i class="fas fa-graduation-cap"></i> Himpunan
                </button>
                <button class="filter-btn" data-filter="ukm">
                    <i class="fas fa-star"></i> UKM
                </button>
            </div>

            <div class="search-container">
                <input type="text" class="search-input" placeholder="Cari pengumuman...">
                <button class="search-btn">
                    <i class="fas fa-search"></i>
                </button>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <main class="main-content">
        <div class="section-title">
            <h2>Daftar Pengumuman</h2>
            <p>Tetap update dengan informasi terbaru dari organisasi mahasiswa</p>
        </div>

        <div class="announcements-grid">
            <!-- Card 1 -->
            <div class="announcement-card" data-category="bem">
                <div class="card-header">
                    <div class="org-icon bem">IT</div>
                    <div class="card-meta">
                        <div class="org-name">BEM IT Del</div>
                        <div class="card-date">15 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-tinggi">TINGGI</span>
                </div>
                <h3 class="card-title">Pendaftaran Anggota Baru BEM IT Del 2024</h3>
                <p class="card-description">Membuka kesempatan bagi mahasiswa baru untuk bergabung dalam kepengurusan BEM IT Del periode 2024-2025</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 2 -->
            <div class="announcement-card" data-category="himpunan">
                <div class="card-header">
                    <div class="org-icon himatif">H</div>
                    <div class="card-meta">
                        <div class="org-name">HIMATIF</div>
                        <div class="card-date">18 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-sedang">SEDANG</span>
                </div>
                <h3 class="card-title">Workshop Teknologi AI dan Machine Learning</h3>
                <p class="card-description">Pelatihan intensif mengenai implementasi AI dalam pengembangan aplikasi modern</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 3 -->
            <div class="announcement-card" data-category="ukm">
                <div class="card-header">
                    <div class="org-icon ukm">U</div>
                    <div class="card-meta">
                        <div class="org-name">UKM Kewirausahaan</div>
                        <div class="card-date">20 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-tinggi">TINGGI</span>
                </div>
                <h3 class="card-title">Kompetisi Startup Digital Innovation Challenge</h3>
                <p class="card-description">Lomba inovasi startup digital dengan total hadiah 50 juta rupiah untuk mahasiswa IT Del</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 4 -->
            <div class="announcement-card" data-category="himpunan">
                <div class="card-header">
                    <div class="org-icon himatera">H</div>
                    <div class="card-meta">
                        <div class="org-name">HIMATERA</div>
                        <div class="card-date">22 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-sedang">SEDANG</span>
                </div>
                <h3 class="card-title">Seminar Nasional Teknologi Berkelanjutan</h3>
                <p class="card-description">Diskusi mendalam tentang peran teknologi dalam pembangunan berkelanjutan</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 5 -->
            <div class="announcement-card" data-category="bem">
                <div class="card-header">
                    <div class="org-icon bem">IT</div>
                    <div class="card-meta">
                        <div class="org-name">BEM IT Del</div>
                        <div class="card-date">25 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-sedang">SEDANG</span>
                </div>
                <h3 class="card-title">Pelatihan Leadership dan Soft Skills</h3>
                <p class="card-description">Program pengembangan kepemimpinan untuk mahasiswa aktif organisasi</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>

            <!-- Card 6 -->
            <div class="announcement-card" data-category="ukm">
                <div class="card-header">
                    <div class="org-icon ukm">U</div>
                    <div class="card-meta">
                        <div class="org-name">UKM Programming</div>
                        <div class="card-date">28 Januari 2024</div>
                    </div>
                    <span class="priority-badge priority-tinggi">TINGGI</span>
                </div>
                <h3 class="card-title">Hackathon Mobile App Development</h3>
                <p class="card-description">Kompetisi pengembangan aplikasi mobile dalam 48 jam non-stop</p>
                <div class="card-actions">
                    <button class="read-more-btn">
                        Baca Selengkapnya <i class="fas fa-arrow-right"></i>
                    </button>
                    <div class="card-icons">
                        <div class="card-icon"><i class="fas fa-share-alt"></i></div>
                        <div class="card-icon"><i class="fas fa-bookmark"></i></div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Priority Legend -->
        <div class="priority-legend">
            <div class="legend-item">
                <div class="legend-dot tinggi"></div>
                <span>Prioritas Tinggi</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot sedang"></div>
                <span>Prioritas Sedang</span>
            </div>
            <div class="legend-item">
                <div class="legend-dot rendah"></div>
                <span>Prioritas Rendah</span>
            </div>
        </div>
    </main>

    <!-- Footer -->
    <footer class="footer">
        <div class="footer-content">
            <div class="footer-section">
                <div class="logo">
                    <div class="logo-icon">BEM</div>
                    <div class="logo-text">
                        <h1 style="color: white;">BEM IT DEL</h1>
                        <p>Badan Eksekutif Mahasiswa</p>
                    </div>
                </div>
                <p style="margin-top: 1rem;">Membangun generasi unggul dan berkarakter untuk kemajuan Institut Teknologi Del dan kontribusi positif bagi masyarakat.</p>
                <div class="social-icons">
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Organisasi</h3>
                <ul>
                    <li><a href="#">Departemen BEM</a></li>
                    <li><a href="#">Himpunan Mahasiswa</a></li>
                    <li><a href="#">Unit Kegiatan Mahasiswa</a></li>
                    <li><a href="#">Struktur Organisasi</a></li>
                    <li><a href="#">Sejarah BEM</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Layanan</h3>
                <ul>
                    <li><a href="#">Aspirasi Mahasiswa</a></li>
                    <li><a href="#">Pengumuman</a></li>
                    <li><a href="#">Galeri Kegiatan</a></li>
                    <li><a href="#">Berita & Artikel</a></li>
                    <li><a href="#">Kontak</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Kontak Kami</h3>
                <ul>
                    <li><i class="fas fa-map-marker-alt"></i> Institut Teknologi Del</li>
                    <li>Jl. Sisingamangaraja, Sitoluama</li>
                    <li>Laguboti, Toba Samosir</li>
                    <li><i class="fas fa-phone"></i> +62 632 331 1234</li>
                    <li><i class="fas fa-envelope"></i> bem@del.ac.id</li>
                    <li><i class="fas fa-clock"></i> Jam Operasional: 08:00 - 17:00</li>
                </ul>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2025 BEM IT DEL. Hak Cipta Dilindungi. | <a href="#" style="color: rgba(255,255,255,0.7);">Kebijakan Privasi</a> | <a href="#" style="color: rgba(255,255,255,0.7);">Syarat & Ketentuan</a> | <a href="#" style="color: rgba(255,255,255,0.7);">Sitemap</a> | <a href="#" style="color: rgba(255,255,255,0.7);">Dibuat</a> | <a href="#" style="color: rgba(255,255,255,0.7);">oleh Tim IT BEM IT DEL</a></p>
        </div>
    </footer>

    <script>
        // Filter functionality
        const filterButtons = document.querySelectorAll('.filter-btn');
        const announcementCards = document.querySelectorAll('.announcement-card');

        filterButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons
                filterButtons.forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                button.classList.add('active');

                const filter = button.getAttribute('data-filter');

                announcementCards.forEach(card => {
                    if (filter === 'all') {
                        card.style.display = 'block';
                    } else {
                        const category = card.getAttribute('data-category');
                        if (category === filter) {
                            card.style.display = 'block';
                        } else {
                            card.style.display = 'none';
                        }
                    }
                });
            });
        });

        // Search functionality
        const searchInput = document.querySelector('.search-input');
        const searchBtn = document.querySelector('.search-btn');

        function performSearch() {
            const searchTerm = searchInput.value.toLowerCase();
            
            announcementCards.forEach(card => {
                const title = card.querySelector('.card-title').textContent.toLowerCase();
                const description = card.querySelector('.card-description').textContent.toLowerCase();
                const orgName = card.querySelector('.org-name').textContent.toLowerCase();
                
                if (title.includes(searchTerm) || description.includes(searchTerm) || orgName.includes(searchTerm)) {
                    card.style.display = 'block';
                } else {
                    card.style.display = 'none';
                }
            });
        }

        searchBtn.addEventListener('click', performSearch);
        searchInput.addEventListener('keypress', (e) => {
            if (e.key === 'Enter') {
                performSearch();
            }
        });

        // Card interactions
        document.querySelectorAll('.read-more-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                e.preventDefault();
                alert('Membuka halaman detail pengumuman...');
            });
        });

        document.querySelectorAll('.card-icon').forEach(icon => {
            icon.addEventListener('click', (e) => {
                e.preventDefault();
                if (icon.querySelector('.fa-share-alt')) {
                    alert('Membagikan pengumuman...');
                } else if (icon.querySelector('.fa-bookmark')) {
                    alert('Menyimpan pengumuman...');
                }
            });
        });

        // Smooth scrolling for navigation
        document.querySelectorAll('.nav-link').forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                // Add navigation logic here
            });
        });

        // Mobile menu toggle (for responsive design)
        const mobileMenuToggle = document.createElement('button');
        mobileMenuToggle.innerHTML = '<i class="fas fa-bars"></i>';
        mobileMenuToggle.className = 'mobile-menu-toggle';
        mobileMenuToggle.style.cssText = `
            display: none;
            background: none;
            border: none;
            font-size: 1.5rem;
            color: #333;
            cursor: pointer;
            @media (max-width: 768px) {
                display: block;
            }
        `;

        // Add mobile menu functionality
        if (window.innerWidth <= 768) {
            document.querySelector('.nav-container').appendChild(mobileMenuToggle);
            
            mobileMenuToggle.addEventListener('click', () => {
                const navMenu = document.querySelector('.nav-menu');
                navMenu.style.display = navMenu.style.display === 'flex' ? 'none' : 'flex';
            });
        }

        // Intersection Observer for animations
        const observerOptions = {
            threshold: 0.1,
            rootMargin: '0px 0px -50px 0px'
        };

        const observer = new IntersectionObserver((entries) => {
            entries.forEach(entry => {
                if (entry.isIntersecting) {
                    entry.target.style.opacity = '1';
                    entry.target.style.transform = 'translateY(0)';
                }
            });
        }, observerOptions);

        // Observe announcement cards for animation
        announcementCards.forEach(card => {
            card.style.opacity = '0';
            card.style.transform = 'translateY(20px)';
            card.style.transition = 'opacity 0.6s ease, transform 0.6s ease';
            observer.observe(card);
        });
    </script>
</body>
</html>