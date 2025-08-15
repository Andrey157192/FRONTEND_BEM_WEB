@extends('layouts.app')

@section('content')
    <!-- Hero Section -->
    <div class="hero-banner" data-aos="fade-down"></div>
    <div class="visi-misi-row">
        <div class="visi-misi-col">
            <h3><span class="icon">&#128161;</span> Visi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer dictum, urna at dictum cursus, urna erat dictum urna, nec dictum urna erat nec urna.</p>
        </div>
        <div class="visi-misi-col">
            <h3><span class="icon">&#128204;</span> Misi</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque euismod, nisi eu consectetur consectetur, nisl nisi consectetur nisi, eu consectetur nisl nisi euismod.</p>
        </div>
        <div class="visi-misi-col">
            <h3><span class="icon">&#128640;</span> Nilai</h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam euismod, nisi euismod euismod, nisi nisi euismod nisi, euismod nisi nisi euismod.</p>
        </div>
    </div>
    <!-- Main Content -->
    <div class="main-content" data-aos="fade-up">
        <div class="bem-logo">
            <img src="https://bem.del.ac.id/wp-content/uploads/2022/03/cropped-logo-bem-1-192x192.png" alt="Logo BEM IT DEL">
        </div>
        <div class="bem-card">
            <h2>Badan Eksekutif Mahasiswa IT DEL 2025</h2>
            <p>BEM IT DEL (Badan Eksekutif Mahasiswa Institut Teknologi Del) merupakan lembaga mahasiswa yang berperan aktif dalam mengembangkan potensi, kreativitas, dan solidaritas mahasiswa. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin dictum, urna at dictum cursus, urna erat dictum urna, nec dictum urna erat nec urna.</p>
        </div>
    </div>
    <!-- Agenda & Kalender -->
    <div class="agenda-section" data-aos="fade-right">
        <div class="agenda-header">
            <h3>Agenda BEM IT DEL</h3>
            <a href="#" class="agenda-link">Lihat semua agenda</a>
        </div>
        <div class="agenda-list" id="agenda-list">
            <ul>
                <li><b>15 Juli 2025</b> - Seminar Nasional: "Inovasi Teknologi Mahasiswa"</li>
                <li><b>22 Juli 2025</b> - Workshop Kewirausahaan Mahasiswa</li>
                <li><b>29 Juli 2025</b> - Bakti Sosial di Toba Samosir</li>
            </ul>
        </div>
    </div>
    <div class="calendar-section" data-aos="fade-left">
        <div class="calendar-header">
            <h4>Kalender</h4>
            <div class="calendar-controls">
                <button id="prevMonth">&lt;</button>
                <button id="todayBtn">Today</button>
                <button id="nextMonth">&gt;</button>
                <button id="monthView" style="background:var(--primary-dark);color:#fff;">Month</button>
                <button id="weekView" disabled>Week</button>
                <button id="dayView" disabled>Day</button>
            </div>
        </div>
        <div id="calendar"></div>
        <div class="calendar-footer">
            <button onclick="window.print()">Print</button>
            <button id="subscribeBtn">Subscribe</button>
        </div>
    </div>
    <!-- Newsletter & Quick Links -->
    <div class="newsletter-section" data-aos="fade-up">
        <div class="newsletter-box">
            <div class="icon">&#9993;</div>
            <h4>Langganan Newsletter</h4>
            <p>Dapatkan berita dan informasi terbaru BEM IT DEL 2025 langsung ke email Anda!</p>
            <form class="newsletter-form" id="newsletterForm">
                <input type="email" id="newsletterEmail" placeholder="Your Email Address" required>
                <button type="submit">Subscribe</button>
            </form>
            <div class="newsletter-confirm" id="newsletterConfirm" style="display:none;">
                Terima kasih telah berlangganan!
            </div>
        </div>
        <div class="quick-links">
            <h4>Tautan Cepat</h4>
            <ul>
                <li><a href="#">APAPAPPA</a></li>
                <li><a href="#">APAPAPPA</a></li>
                <li><a href="#">APAPAPPA</a></li>
                <li><a href="#">APAPAPPA PPA</a></li>
            </ul>
        </div>
    </div>
@endsection