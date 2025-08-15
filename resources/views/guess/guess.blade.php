<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM 2024 - Badan Eksekutif Mahasiswa</title>
    <link rel="stylesheet" href="css/guess.css">
</head>
<body>

    <div class="floating-circles">
        <div class="floating-circle circle-1"></div>
        <div class="floating-circle circle-2"></div>
        <div class="floating-circle circle-3"></div>
        <div class="floating-circle circle-4"></div>
        <div class="floating-circle circle-5"></div>
        <div class="floating-circle circle-6"></div>
        <div class="floating-circle circle-7"></div>
        <div class="floating-circle circle-8"></div>
        <div class="floating-circle circle-9"></div>
        <div class="floating-circle circle-10"></div>
    </div>

    <header class="header">
        <div class="header-content">
            <div class="logo">
                <div class="logo-icon">BEM</div>
                <div class="logo-text">
                    <div class="logo-title">BEM 2024</div>
                    <div class="logo-subtitle">Universitas Indonesia</div>
                </div>
            </div>
            <nav class="nav">
                <ul class="nav-links">
                    <li><a href="#beranda">Beranda</a></li>
                    <li><a href="#profil">Profil</a></li>
                    <li><a href="#pencapaian">Pencapaian</a></li>
                    <li><a href="#organisasi">Organisasi</a></li>
                    <li><a href="#artikel">Artikel</a></li>
                    <li><a href="#galeri">Galeri</a></li>
                </ul>
                <a href="#gabung" class="cta-button">Gabung BEM</a>
            </nav>
        </div>
    </header>

    <main class="hero">
        <div class="hero-content">
            <div class="period-badge">Periode 2024-2025</div>
            <h1 class="hero-title">
                Badan Eksekutif<br>
                <strong>Mahasiswa</strong>
            </h1>
            <p class="hero-description">
                Bersama Mewujudkan Aksi, Prestasi, dan Kolaborasi Mahasiswa untuk Masa Depan yang Lebih Cerah
            </p>
            <div class="hero-buttons">
                <a href="#visi-misi" class="btn btn-primary">
                    👁️ Lihat Visi Misi
                </a>
                <a href="#pencapaian" class="btn btn-secondary">
                    ⭐ Lihat Pencapaian
                </a>
            </div>
        </div>
        <div class="hero-image">
            <div class="hero-image-title">
                Kampus & Mahasiswa
            </div>
        </div>
    </main>

    <section id="visi-misi" class="visi-misi-section animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Visi & Misi</div>
                <h2 class="section-title">Visi dan Misi BEM 2024</h2>
                <p class="section-subtitle">Komitmen kami untuk memajukan kehidupan mahasiswa dan kampus</p>
            </div>
            
            <div class="visi-misi-content">
                <div class="visi-card">
                    <div class="card-icon">👁️</div>
                    <h3 class="card-title">Visi</h3>
                    <p class="card-description">
                        Menjadi organisasi mahasiswa yang inovatif, inklusif, dan berdampak dalam mewujudkan 
                        kampus yang dinamis, mahasiswa yang berprestasi, dan kontribusi nyata bagi masyarakat.
                    </p>
                </div>
                
                <div class="misi-card">
                    <div class="card-icon">🎯</div>
                    <h3 class="card-title">Misi</h3>
                    <ul class="misi-list">
                        <li>Mengembangkan potensi akademik dan non-akademik mahasiswa melalui program-program berkualitas</li>
                        <li>Memfasilitasi aspirasi mahasiswa dan menjadi jembatan komunikasi dengan pihak universitas</li>
                        <li>Menciptakan lingkungan kampus yang kondusif untuk pembelajaran dan pengembangan diri</li>
                        <li>Menjalin kerjasama strategis dengan berbagai pihak untuk kemajuan mahasiswa</li>
                        <li>Mengimplementasikan program-program inovatif yang berdampak positif bagi kampus dan masyarakat</li>
                    </ul>
                </div>
            </div>
            
            <div class="values-section">
                <h3 class="values-title">Nilai-Nilai Kami</h3>
                <div class="values-grid">
                    <div class="value-item stagger-animation">
                        <div class="value-icon">🤝</div>
                        <h4>Kolaborasi</h4>
                        <p>Bekerja sama untuk mencapai tujuan bersama</p>
                    </div>
                    <div class="value-item stagger-animation">
                        <div class="value-icon">💡</div>
                        <h4>Inovasi</h4>
                        <p>Menciptakan solusi kreatif dan berkelanjutan</p>
                    </div>
                    <div class="value-item stagger-animation">
                        <div class="value-icon">🏆</div>
                        <h4>Prestasi</h4>
                        <p>Mendorong pencapaian terbaik di setiap bidang</p>
                    </div>
                    <div class="value-item stagger-animation">
                        <div class="value-icon">🌟</div>
                        <h4>Integritas</h4>
                        <p>Menjunjung tinggi kejujuran dan transparansi</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
<section id="organisasi" class="organisasi-section animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">Organisasi Mahasiswa</div>
                <h2 class="section-title">Organisasi & Unit Kegiatan</h2>
                <p class="section-subtitle">20 Organisasi dan UKM yang bernaung di bawah BEM</p>
            </div>
            
            <div class="org-grid">
                <div class="org-wrapper">
                    <div class="org-row org-row-1">
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="Badan Eksekutif Mahasiswa">
                                <img src="{{ asset('images/organisasi/bem-logo.png') }}" alt="BEM Logo">
                            </div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="Dewan Perwakilan Mahasiswa">
                                <img src="{{ asset('images/organisasi/dpm-logo.png') }}" alt="DPM Logo">
                            </div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="Senat Mahasiswa">SM</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Basketball">🏀</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Futsal">⚽</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Badminton">🏸</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Voli">🏐</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Renang">🏊</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Panahan">🎯</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Catur">♟️</div>
                        </div>
                    </div>
                </div>
                
                <div class="org-wrapper">
                    <div class="org-row org-row-2">
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Teater">
                                <img src="{{ asset('images/organisasi/teater-logo.png') }}" alt="Teater Logo">
                            </div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Band">🎸</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Tari">💃</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Paduan Suara">🎤</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Fotografi">📸</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM IT">💻</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Penelitian">🔬</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Jurnalistik">📰</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Radio">📻</div>
                        </div>
                        <div class="org-item">
                            <div class="org-logo stagger-animation" title="UKM Wirausaha">💼</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <section id="pencapaian" class="pencapaian-section animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">⭐ Pencapaian & Program 2024</div>
                <h2 class="section-title">Pencapaian dan Program Kerja 2024</h2>
                <p class="section-subtitle">Berbagai program kerja yang telah dan sedang terlaksana untuk kemajuan mahasiswa</p>
            </div>
            
            <div class="pencapaian-grid">
                <div class="pencapaian-card stagger-animation">
                    <div class="card-header">
                        <div class="card-icon-bg blue">
                            <span class="card-icon">🎓</span>
                        </div>
                        <div class="card-status completed">Selesai</div>
                    </div>
                    <h3 class="card-title">Program Beasiswa Mahasiswa</h3>
                    <p class="card-description">Bantuan pendanaan beasiswa untuk 150+ mahasiswa berprestasi</p>
                </div>
                
                <div class="pencapaian-card stagger-animation">
                    <div class="card-header">
                        <div class="card-icon-bg blue">
                            <span class="card-icon">🤖</span>
                        </div>
                        <div class="card-status completed">Selesai</div>
                    </div>
                    <h3 class="card-title">Seminar Teknologi AI</h3>
                    <p class="card-description">Menghadirkan speaker expert AI dengan 500+ peserta</p>
                </div>
                
                <div class="pencapaian-card stagger-animation">
                    <div class="card-header">
                        <div class="card-icon-bg blue">
                            <span class="card-icon">🎭</span>
                        </div>
                        <div class="card-status completed">Selesai</div>
                    </div>
                    <h3 class="card-title">Festival Seni Budaya</h3>
                    <p class="card-description">Event seni budaya dengan 20+ pertunjukan</p>
                </div>
                
                <div class="pencapaian-card stagger-animation">
                    <div class="card-header">
                        <div class="card-icon-bg blue">
                            <span class="card-icon">💻</span>
                        </div>
                        <div class="card-status completed">Selesai</div>
                    </div>
                    <h3 class="card-title">Kompetisi Programming</h3>
                    <p class="card-description">Lomba coding tingkat nasional dengan hadiah 50 juta</p>
                </div>
            </div>
        </div>
    </section>

    <div class="scroll-indicator"></div>

    <!-- Added JavaScript for scroll-triggered animations -->
   <script src="js/guess.js"></script>

</body>
</html>
