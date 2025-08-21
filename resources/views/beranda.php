<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM Institut Teknologi Del | Kabinet #SahatMarsada</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css" rel="stylesheet">
    <!-- Google Fonts: Poppins -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet">
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

    <!-- Custom CSS -->
    <style>
        /* 1. SKEMA WARNA BARU SESUAI LOGO */
        :root {
            --del-primary-blue: #0078D4; /* Biru cerah dari logo BEM */
            --del-accent-yellow: #D4DD51; /* Kuning/hijau dari ikon payung */
            --del-dark: #212529;      /* Hitam pekat untuk teks agar mudah dibaca */
            --del-light-gray: #f8f9fa; /* Abu-abu sangat terang untuk background */
            --del-text-muted: #6c757d;  /* Abu-abu untuk teks sekunder */
        }

        /* 2. Pengaturan Dasar & Kustomisasi Bootstrap */
        body {
            font-family: 'Poppins', sans-serif;
        }
        .bg-del-primary-blue { background-color: var(--del-primary-blue); }
        .text-del-primary-blue { color: var(--del-primary-blue); }
        .border-del-primary-blue { border-color: var(--del-primary-blue) !important; }
        .btn-primary {
            background-color: var(--del-primary-blue);
            border-color: var(--del-primary-blue);
        }
        .btn-warning {
            background-color: var(--del-accent-yellow);
            border-color: var(--del-accent-yellow);
            color: var(--del-dark) !important; /* Teks gelap di atas tombol kuning */
        }
        .btn-warning:hover {
            filter: brightness(0.95);
        }

        /* 3. CSS UNTUK HERO SECTION BARU */
        .hero-section-v2 {
            background-color: var(--del-light-gray);
            padding-top: 6rem;
            padding-bottom: 6rem;
            overflow: hidden;
        }
        .hero-image-wrapper {
            position: relative;
            background: linear-gradient(135deg, var(--del-primary-blue), #00A1E0);
            border-radius: 1.5rem;
            padding: 1rem;
            box-shadow: 0 1rem 3rem rgba(0,0,0,0.1);
        }
        .hero-image-wrapper img {
            border-radius: 1rem;
        }
        .hero-section-v2 h1 {
            font-weight: 800; /* Extra bold */
        }

        /* 4. CSS UNTUK MARQUEE ORGANISASI */
        .marquee-container { overflow: hidden; white-space: nowrap; }
        .marquee-content { display: inline-block; animation: marquee 30s linear infinite; }
        @keyframes marquee { from { transform: translateX(0%); } to { transform: translateX(-50%); } }

        /* 5. CSS UNTUK KALENDER */
        .calendar-grid { display: grid; grid-template-columns: repeat(7, 1fr); gap: 0.5rem; }
        .calendar-cell { border: 1px solid #eee; border-radius: 0.375rem; padding: 0.5rem; height: 7rem; display: flex; flex-direction: column; }
        .calendar-cell .events { overflow-y: auto; font-size: 0.75rem; }
        .calendar-cell.is-today { background-color: var(--del-primary-blue); color: white; }
        .event-badge { padding: 0.2rem 0.4rem; border-radius: 0.25rem; color: white; margin-bottom: 0.25rem; white-space: nowrap; overflow: hidden; text-overflow: ellipsis; }

        /* 6. CSS UNTUK ASPIRASI */
        .scrolling-columns-container {
            display: grid;
            grid-template-columns: repeat(2, 1fr);
            gap: 1.5rem;
            height: 500px;
            overflow: hidden;
            position: relative;
            -webkit-mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);
            mask-image: linear-gradient(to bottom, transparent, black 15%, black 85%, transparent);
        }
        @media (max-width: 991px) {
            .scrolling-columns-container { margin-bottom: 2rem; }
        }
        @media (max-width: 767px) {
            .scrolling-columns-container { grid-template-columns: 1fr; }
        }
        .scrolling-column { display: flex; flex-direction: column; gap: 1.5rem; }
        @keyframes scroll-up { from { transform: translateY(0); } to { transform: translateY(-50%); } }
        @keyframes scroll-down { from { transform: translateY(-50%); } to { transform: translateY(0); } }
        .scrolling-column:nth-child(odd) { animation: scroll-up 40s linear infinite; }
        .scrolling-column:nth-child(even) { animation: scroll-down 35s linear infinite; }
        .scrolling-columns-container:hover .scrolling-column { animation-play-state: paused; }
    </style>
</head>

<body>

    <!-- 1. Navbar (Responsif & Tema Baru) -->
    <nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="#">
                <img src="assets/bem.png" alt="Logo BEM IT Del" style="height: 40px;" class="me-2">
                <span class="fw-bold fs-5 text-dark">BEM IT Del</span>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainNavbar" aria-controls="mainNavbar" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="mainNavbar">
                <ul class="navbar-nav mx-auto mb-2 mb-lg-0">
                    <li class="nav-item"><a class="nav-link" href="#beranda">Beranda</a></li>
                    <li class="nav-item"><a class="nav-link" href="#visi-misi">Visi & Misi</a></li>
                    <li class="nav-item"><a class="nav-link" href="#proker">Program Kerja</a></li>
                    <li class="nav-item"><a class="nav-link" href="#kalender">Kalender</a></li>
                    <li class="nav-item"><a class="nav-link" href="#aspirasi">Aspirasi</a></li>
                </ul>
                <a href="#footer" class="btn btn-primary rounded-pill px-4">Hubungi Kami</a>
            </div>
        </div>
    </nav>

    <main>
        <!-- 2. Hero Section Interaktif Baru -->
        <section id="beranda" class="hero-section-v2">
            <div class="container">
                <div class="row align-items-center g-5">
                    <div class="col-lg-6">
                        <p class="text-uppercase fw-bold text-del-primary-blue mb-2" data-aos="fade-right">KABINET #SAHATMARSADA</p>
                        <h1 class="display-3 text-del-dark" data-aos="fade-right" data-aos-delay="100">Sinergi dalam Aksi, Unggul dalam Karya.</h1>
                        <p class="lead text-del-text-muted my-4" data-aos="fade-right" data-aos-delay="200">
                            Selamat datang di laman resmi Badan Eksekutif Mahasiswa Institut Teknologi Del. Wadah aspirasi, inovasi, dan kolaborasi untuk seluruh mahasiswa.
                        </p>
                        <div data-aos="fade-right" data-aos-delay="300">
                            <a href="#aspirasi" class="btn btn-lg btn-warning rounded-pill fw-bold px-4 py-3">Sampaikan Aspirasi <i class="bi bi-arrow-right-short"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="hero-image-wrapper" data-aos="fade-left" data-aos-delay="200">
                            <img src="assets/bem.png" class="img-fluid shadow-sm" alt="Foto Kabinet BEM IT Del">
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 3. Visi & Misi Section -->
        <section id="visi-misi" class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-del-dark">Visi & Misi</h2>
                    <p class="text-muted">Arah dan tujuan perjuangan kami.</p>
                </div>
                <div class="row g-4 align-items-stretch">
                    <div class="col-md-6" data-aos="fade-right">
                        <div class="card h-100 shadow-sm border-start border-5 border-del-primary-blue p-4">
                            <div class="card-body">
                                <h3 class="card-title h2 fw-bold text-del-primary-blue mb-3">Visi</h3>
                                <p class="card-text text-muted">"Menjadikan BEM IT Del sebagai wadah aspirasi yang proaktif, inovatif, dan kolaboratif, serta mampu membawa nama baik Institut Teknologi Del di kancah nasional maupun internasional."</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6" data-aos="fade-left">
                        <div class="card h-100 shadow-sm border-start border-5 border-warning-subtle p-4">
                            <div class="card-body ">
                                <h3 class="card-title h2 fw-bold text-warning-emphasis mb-3">Misi</h3>
                                <ul class="list-unstyled text-muted">
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Meningkatkan kualitas sumber daya mahasiswa.</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Mengoptimalkan pelayanan advokasi mahasiswa.</li>
                                    <li class="mb-2"><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Membangun hubungan sinergis internal & eksternal.</li>
                                    <li><i class="bi bi-check-circle-fill text-del-primary-blue me-2"></i>Mendorong inovasi dan prestasi mahasiswa.</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 4. Keluarga Organisasi Section (DITAMBAHKAN KEMBALI) -->
        <section id="organisasi" class="py-5 bg-del-light-gray">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-del-dark">Keluarga Organisasi</h2>
                    <p class="text-muted">Mitra kami dalam membangun sinergi di IT Del.</p>
                </div>
            </div>
            <div class="marquee-container" data-aos="fade-up">
                <div class="marquee-content d-flex">
                    <!-- Set 1 -->
                    <div class="d-flex">
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 1</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 2</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 3</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 4</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 5</span></div>
                    </div>
                    <!-- Set 2 (Duplikat untuk animasi loop) -->
                    <div class="d-flex">
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 1</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 2</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 3</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 4</span></div>
                        <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 5</span></div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 5. Program Kerja Section -->
        <section id="proker" class="py-5">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-del-dark">Program & Kinerja</h2>
                    <p class="text-muted">Realisasi dari visi dan misi kami.</p>
                </div>
                <div class="row g-4">
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="100">
                        <div class="card shadow-sm h-100">
                            <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Del+Innovate" class="card-img-top" alt="Proker 1">
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Selesai</span>
                                <h5 class="card-title fw-bold">Del Innovate 2024</h5>
                                <p class="card-text text-muted small">Kompetisi inovasi teknologi tahunan untuk mendorong kreativitas mahasiswa IT Del.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="200">
                        <div class="card shadow-sm h-100">
                            <img src="https://via.placeholder.com/600x400/0078D4/ffffff?text=Bakti+Sosial" class="card-img-top" alt="Proker 2">
                            <div class="card-body">
                                <span class="badge bg-success mb-2">Selesai</span>
                                <h5 class="card-title fw-bold">Bakti Sosial Desa Binaan</h5>
                                <p class="card-text text-muted small">Program pengabdian masyarakat di desa sekitaran Danau Toba, berfokus pada pendidikan.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4" data-aos="fade-up" data-aos-delay="300">
                        <div class="card shadow-sm h-100">
                            <img src="https://via.placeholder.com/600x400/D4DD51/212529?text=Leadership+Camp" class="card-img-top" alt="Proker 3">
                            <div class="card-body">
                                <span class="badge bg-warning text-dark mb-2">Dalam Proses</span>
                                <h5 class="card-title fw-bold">Leadership Training Camp</h5>
                                <p class="card-text text-muted small">Pelatihan kepemimpinan intensif untuk pengurus organisasi mahasiswa di IT Del.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 6. Kalender Kegiatan Section -->
        <section id="kalender" class="py-5 bg-del-light-gray" x-data="calendar()">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold text-del-dark">Kalender Kegiatan</h2>
                    <p class="text-muted">Jangan lewatkan setiap momen penting bersama kami.</p>
                </div>
                <div class="card shadow-sm" data-aos="fade-up">
                    <div class="card-body p-4">
                        <div class="d-flex justify-content-between align-items-center mb-4">
                            <button @click="prevMonth()" class="btn btn-outline-secondary border-0">&lt;</button>
                            <div class="d-flex align-items-center">
                                <select x-model="currentMonth" @change="updateCalendar()" class="form-select me-2" style="width: auto;">
                                    <template x-for="(month, index) in months" :key="index"><option :value="index" x-text="month"></option></template>
                                </select>
                                <span x-text="currentYear" class="h5 mb-0"></span>
                            </div>
                            <button @click="nextMonth()" class="btn btn-outline-secondary border-0">&gt;</button>
                        </div>
                        <div class="calendar-grid">
                            <template x-for="day in daysOfWeek" :key="day"><div class="text-center fw-bold text-muted small" x-text="day"></div></template>
                            <template x-for="blankday in blankdays"><div class="calendar-cell bg-light"></div></template>
                            <template x-for="day in no_of_days" :key="day">
                                <div class="calendar-cell" :class="{'is-today': isToday(day)}">
                                    <span class="fw-bold" x-text="day"></span>
                                    <div class="events mt-1">
                                        <template x-for="event in events.filter(e => new Date(e.date).getDate() === day && new Date(e.date).getMonth() === currentMonth)">
                                            <div class="event-badge" :class="event.color" x-text="event.title"></div>
                                        </template>
                                    </div>
                                </div>
                            </template>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- 7. Aspirasi Section (Scrolling Cards + Form) -->
        <section id="aspirasi" class="py-5 bg-dark text-white">
            <div class="container">
                <div class="text-center mb-5" data-aos="fade-up">
                    <h2 class="display-5 fw-bold">Suara Mahasiswa</h2>
                    <p class="text-white-50">Sampaikan aspirasimu dan lihat apa kata mereka.</p>
                </div>
                <div class="row g-4 g-lg-5 align-items-center">
                    <div class="col-lg-7" data-aos="fade-right">
                        <div class="scrolling-columns-container">
                            <!-- Kolom Internal 1 -->
                            <div class="scrolling-column">
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Program Bermanfaat</h5><p class="card-text text-muted small">"Webinar series membuka wawasan kami tentang dunia industri. Terima kasih!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Budi Santoso</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Inovatif & Kreatif</h5><p class="card-text text-muted small">"Del Innovate benar-benar jadi ajang unjuk gigi. Terima kasih BEM!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Elisa Putri</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Transparansi Informasi</h5><p class="card-text text-muted small">"Website baru ini keren! Kalender kegiatannya sangat membantu agar tidak ketinggalan info."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Doni Firmansyah</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Program Bermanfaat</h5><p class="card-text text-muted small">"Webinar series membuka wawasan kami tentang dunia industri. Terima kasih!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Budi Santoso</small></div></div></div>
                            </div>
                            <!-- Kolom Internal 2 -->
                            <div class="scrolling-column">
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Advokasi Cepat</h5><p class="card-text text-muted small">"Apresiasi untuk tim advokasi BEM yang responsif menangani keluhan. Prosesnya cepat dan solutif."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Citra Lestari</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Peduli Sesama</h5><p class="card-text text-muted small">"Kegiatan bakti sosial sangat menyentuh. Senang melihat mahasiswa bisa berkontribusi langsung."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Rina Amelia</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Pengembangan Diri</h5><p class="card-text text-muted small">"Leadership Training Camp-nya seru banget! Banyak ilmu baru yang didapat."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Agung Wijaya</small></div></div></div>
                                <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Advokasi Cepat</h5><p class="card-text text-muted small">"Apresiasi untuk tim advokasi BEM yang responsif menangani keluhan. Prosesnya cepat dan solutif."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Citra Lestari</small></div></div></div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-5" data-aos="fade-left" data-aos-delay="100">
                        <div class="card p-4 shadow-sm border-0">
                            <div class="card-body text-dark">
                                <h4 class="fw-bold text-del-dark mb-3">Sampaikan Aspirasimu</h4>
                                <p class="text-muted small mb-4">Setiap masukan Anda sangat berharga untuk kemajuan kita bersama. Silakan isi form di bawah ini.</p>
                                <form action="#" method="POST">
                                    <div class="mb-3"><label for="namaAspiran" class="form-label fw-semibold">Nama Anda</label><input type="text" class="form-control" id="namaAspiran" name="nama" placeholder="Contoh: Budi Santoso" required></div>
                                    <div class="mb-3"><label for="deskripsiAspirasi" class="form-label fw-semibold">Aspirasi atau Masukan</label><textarea class="form-control" id="deskripsiAspirasi" name="aspirasi" rows="5" placeholder="Tuliskan masukan, saran, atau apresiasi Anda di sini..." required></textarea></div>
                                    <button type="submit" class="btn btn-warning w-100 fw-bold py-2">Kirim Aspirasi</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- 8. Footer -->
    <footer id="footer" class="bg-dark text-white pt-5 pb-4">
        <div class="container">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6">
                    <div class="d-flex align-items-center mb-3">
                        <img src="assets/bem.png" alt="Logo BEM IT Del" style="height: 40px;" class="me-2">
                        <h5 class="mb-0 fw-bold">BEM IT Del</h5>
                    </div>
                    <p class="text-white-50 small">Badan Eksekutif Mahasiswa Institut Teknologi Del. Sinergi dalam Aksi, Unggul dalam Karya.</p>
                </div>
                <div class="col-lg-2 col-md-6">
                    <h5 class="text-del-primary-blue mb-3">Tautan Cepat</h5>
                    <ul class="list-unstyled">
                        <li class="mb-2"><a href="#beranda" class="text-white-50 text-decoration-none">Beranda</a></li>
                        <li class="mb-2"><a href="#visi-misi" class="text-white-50 text-decoration-none">Visi & Misi</a></li>
                        <li class="mb-2"><a href="#proker" class="text-white-50 text-decoration-none">Program Kerja</a></li>
                        <li class="mb-2"><a href="#aspirasi" class="text-white-50 text-decoration-none">Aspirasi</a></li>
                        <li><a href="#kalender" class="text-white-50 text-decoration-none">Agenda</a></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-del-primary-blue mb-3">Hubungi Kami</h5>
                    <ul class="list-unstyled text-white-50 small">
                        <li class="d-flex mb-2"><i class="bi bi-geo-alt-fill me-2 mt-1"></i><span>Jl. Sisingamangaraja, Sitoluama, Laguboti, Toba, Sumatera Utara</span></li>
                        <li class="d-flex"><i class="bi bi-envelope-fill me-2"></i><span>bem@del.ac.id</span></li>
                    </ul>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h5 class="text-del-primary-blue mb-3">Ikuti Kami</h5>
                    <div class="d-flex">
                        <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-instagram"></i></a>
                        <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-twitter-x"></i></a>
                        <a href="#" class="text-white-50 me-3 fs-4"><i class="bi bi-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <hr class="border-secondary">
            <div class="text-center text-white-50 small" x-data="{ year: new Date().getFullYear() }">
                &copy; <span x-text="year"></span> BEM Institut Teknologi Del. All Rights Reserved.
            </div>
        </div>
    </footer>

    <!-- Scripts -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <script>
        AOS.init({ duration: 800, once: true, offset: 100 });

        function calendar() {
            return {
                currentMonth: new Date().getMonth(),
                currentYear: new Date().getFullYear(),
                no_of_days: [],
                blankdays: [],
                months: ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'],
                daysOfWeek: ['Min', 'Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab'],
                events: [
                    { date: '2024-08-05', title: 'Rapat Kabinet', color: 'bg-primary' },
                    { date: '2024-08-10', title: 'Webinar AI', color: 'bg-success' },
                    { date: '2024-08-17', title: 'HUT RI', color: 'bg-danger' },
                    { date: '2024-09-01', title: 'Penerimaan Maba', color: 'bg-warning text-dark' },
                ],
                init() { this.updateCalendar(); },
                isToday(day) {
                    const today = new Date();
                    return today.toDateString() === new Date(this.currentYear, this.currentMonth, day).toDateString();
                },
                updateCalendar() {
                    const firstDay = new Date(this.currentYear, this.currentMonth, 1).getDay();
                    const daysInMonth = new Date(this.currentYear, this.currentMonth + 1, 0).getDate();
                    this.blankdays = Array.from({ length: firstDay });
                    this.no_of_days = Array.from({ length: daysInMonth }, (_, i) => i + 1);
                },
                prevMonth() {
                    if (this.currentMonth === 0) { this.currentMonth = 11; this.currentYear--; } 
                    else { this.currentMonth--; }
                    this.updateCalendar();
                },
                nextMonth() {
                    if (this.currentMonth === 11) { this.currentMonth = 0; this.currentYear++; }
                    else { this.currentMonth++; }
                    this.updateCalendar();
                }
            }
        }
    </script>
</body>
</html>