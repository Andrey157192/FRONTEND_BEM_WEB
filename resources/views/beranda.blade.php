@extends('layouts.app')

@section('content')

    <!-- Hero Section -->
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
                        <img src="{{ asset('assets/bem.png') }}" class="img-fluid shadow-sm" alt="Foto Kabinet BEM IT Del">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi & Misi Section -->
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

    <!-- Keluarga Organisasi Section -->
    <section id="organisasi" class="py-5 bg-del-light-gray">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold text-del-dark">Keluarga Organisasi</h2>
                <p class="text-muted">Mitra kami dalam membangun sinerggi di IT Del.</p>
            </div>
        </div>
        <div class="marquee-container" data-aos="fade-up">
            <div class="marquee-content d-flex">
                <div class="d-flex">
                    <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 1</span></div>
                    <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 2</span></div>
                    <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 3</span></div>
                    <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 4</span></div>
                    <div class="mx-4 p-4 bg-white rounded shadow-sm d-flex align-items-center justify-content-center" style="width: 200px; height: 100px;"><span>Logo Organisasi 5</span></div>
                </div>
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

    <!-- Program Kerja Section -->
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

    <!-- Kalender Kegiatan Section -->
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

    <!-- Aspirasi Section -->
    <section id="aspirasi" class="py-5 bg-dark text-white">
        <div class="container">
            <div class="text-center mb-5" data-aos="fade-up">
                <h2 class="display-5 fw-bold">Suara Mahasiswa</h2>
                <p class="text-white-50">Sampaikan aspirasimu dan lihat apa kata mereka.</p>
            </div>
            <div class="row g-4 g-lg-5 align-items-center">
                <div class="col-lg-7" data-aos="fade-right">
                    <div class="scrolling-columns-container">
                        <div class="scrolling-column">
                            <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Program Bermanfaat</h5><p class="card-text text-muted small">"Webinar series membuka wawasan kami tentang dunia industri. Terima kasih!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Budi Santoso</small></div></div></div>
                            <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Inovatif & Kreatif</h5><p class="card-text text-muted small">"Del Innovate benar-benar jadi ajang unjuk gigi. Terima kasih BEM!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Elisa Putri</small></div></div></div>
                            <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Transparansi Informasi</h5><p class="card-text text-muted small">"Website baru ini keren! Kalender kegiatannya sangat membantu agar tidak ketinggalan info."</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Doni Firmansyah</small></div></div></div>
                            <div class="card p-3 shadow-sm border-0 bg-white text-dark"><div class="card-body"><h5 class="card-title fw-bold">Program Bermanfaat</h5><p class="card-text text-muted small">"Webinar series membuka wawasan kami tentang dunia industri. Terima kasih!"</p><hr><div class="d-flex align-items-center mt-2"><img src="https://via.placeholder.com/40" class="rounded-circle me-3" alt="Foto"><small class="fw-bold">Budi Santoso</small></div></div></div>
                        </div>
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

@endsection