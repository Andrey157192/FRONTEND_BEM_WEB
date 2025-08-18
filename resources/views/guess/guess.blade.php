<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEM 2024 - Badan Eksekutif Mahasiswa</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/toastify-js/src/toastify.min.css">
    <link rel="stylesheet" href="css/guess.css">
    <link rel="stylesheet" href="css/calendar.css">
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
                    <li><a href="#kalender">Kalender</a></li>
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

    <section id="kalender" class="kalender-section animate-on-scroll">
        <div class="container">
            <div class="section-header">
                <div class="section-badge">📅 Kalender Kegiatan</div>
                <h2 class="section-title">Kalender Kegiatan BEM 2024</h2>
                <p class="section-subtitle">Jadwal kegiatan dan program kerja yang akan datang</p>
            </div>
            
            <div class="category-filters">
                <h4 class="filter-title">Filter Kategori:</h4>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-category="all">Semua</button>
                    <button class="filter-btn" data-category="bem">BEM</button>
                    <button class="filter-btn" data-category="kemahasiswaan">Kemahasiswaan</button>
                    <button class="filter-btn" data-category="himpunan">Himpunan</button>
                    <button class="filter-btn" data-category="ukm">UKM</button>
                    <button class="filter-btn" data-category="akademik">Akademik</button>
                </div>
                <div class="category-legend">
                    <div class="legend-item">
                        <div class="legend-color bem"></div>
                        <span>BEM</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color kemahasiswaan"></div>
                        <span>Kemahasiswaan</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color himpunan"></div>
                        <span>Himpunan</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color ukm"></div>
                        <span>UKM</span>
                    </div>
                    <div class="legend-item">
                        <div class="legend-color akademik"></div>
                        <span>Akademik</span>
                    </div>
                </div>
            </div>
            
            <div class="calendar-layout">
                <div class="upcoming-events">
                    <h3 class="events-title">Kegiatan Mendatang</h3>
                    <div class="events-list">
                        <!-- Events will be dynamically inserted here -->
                    </div>
                </div>

                <div class="calendar-container">
                    <div class="calendar-header">
                        <button class="calendar-nav-btn" id="prevMonth">
                            <i class="fas fa-chevron-left"></i>
                        </button>
                        <h3 class="calendar-month-year" id="monthYear"></h3>
                        <button class="calendar-nav-btn" id="nextMonth">
                            <i class="fas fa-chevron-right"></i>
                        </button>
                    </div>
                    
                    <div class="calendar-grid">
                        <div class="calendar-weekdays">
                            <div class="weekday">Min</div>
                            <div class="weekday">Sen</div>
                            <div class="weekday">Sel</div>
                            <div class="weekday">Rab</div>
                            <div class="weekday">Kam</div>
                            <div class="weekday">Jum</div>
                            <div class="weekday">Sab</div>
                        </div>
                        <div class="calendar-days" id="calendarDays"></div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Added JavaScript for scroll-triggered animations -->
    <script src="js/guess.js"></script>
    <!-- Added Calendar JavaScript -->
    <script>
        // Calendar functionality
        const monthNames = [
            "Januari", "Februari", "Maret", "April", "Mei", "Juni",
            "Juli", "Agustus", "September", "Oktober", "November", "Desember"
        ];

        let currentDate = new Date();
        let currentMonth = currentDate.getMonth();
        let currentYear = currentDate.getFullYear();
        let activeCategory = 'all'; // Added active category filter

        const events = {
            '2025-01-15': {
                title: 'Seminar Kewirausahaan',
                description: 'Workshop pengembangan jiwa entrepreneur untuk mahasiswa',
                time: '09:00 - 12:00',
                location: 'Aula Utama',
                category: 'bem',
                organizer: 'BEM UI'
            },
            '2025-01-22': {
                title: 'Turnamen E-Sports',
                description: 'Kompetisi gaming antar fakultas dengan hadiah menarik',
                time: '13:00 - 18:00',
                location: 'Lab Komputer',
                category: 'ukm',
                organizer: 'UKM IT'
            },
            '2025-01-28': {
                title: 'Bakti Sosial',
                description: 'Kegiatan pengabdian masyarakat di desa sekitar kampus',
                time: '07:00 - 15:00',
                location: 'Desa Suka Maju',
                category: 'kemahasiswaan',
                organizer: 'Kemahasiswaan UI'
            },
            '2025-02-05': {
                title: 'Workshop Design Thinking',
                description: 'Pelatihan metodologi design thinking untuk inovasi',
                time: '14:00 - 17:00',
                location: 'Ruang Seminar',
                category: 'akademik',
                organizer: 'Fakultas Teknik'
            },
            '2025-02-12': {
                title: 'Pelatihan Leadership',
                description: 'Pengembangan kemampuan kepemimpinan mahasiswa',
                time: '10:00 - 16:00',
                location: 'Gedung Serbaguna',
                category: 'bem',
                organizer: 'BEM UI'
            },
            '2025-02-18': {
                title: 'Festival Musik',
                description: 'Pertunjukan musik dari berbagai UKM',
                time: '19:00 - 22:00',
                location: 'Lapangan Utama',
                category: 'ukm',
                organizer: 'UKM Band'
            },
            '2025-02-25': {
                title: 'Seminar Karir',
                description: 'Tips dan strategi membangun karir profesional',
                time: '13:00 - 17:00',
                location: 'Auditorium',
                category: 'kemahasiswaan',
                organizer: 'Career Center'
            },
            '2025-08-05': {
                title: 'Orientasi Mahasiswa Baru',
                description: 'Pengenalan kampus dan organisasi untuk mahasiswa baru',
                time: '08:00 - 17:00',
                location: 'Seluruh Kampus',
                category: 'kemahasiswaan',
                organizer: 'Kemahasiswaan UI'
            },
            '2025-08-12': {
                title: 'Workshop Fotografi',
                description: 'Pelatihan teknik fotografi untuk dokumentasi kegiatan',
                time: '14:00 - 18:00',
                location: 'Studio Fotografi',
                category: 'ukm',
                organizer: 'UKM Fotografi'
            },
            '2025-08-17': {
                title: 'Peringatan HUT RI',
                description: 'Upacara dan lomba memperingati kemerdekaan Indonesia',
                time: '07:00 - 12:00',
                location: 'Lapangan Upacara',
                category: 'kemahasiswaan',
                organizer: 'Kemahasiswaan UI'
            },
            '2025-08-24': {
                title: 'Seminar Teknologi Blockchain',
                description: 'Pengenalan teknologi blockchain dan cryptocurrency',
                time: '09:00 - 15:00',
                location: 'Ruang Konferensi',
                category: 'himpunan',
                organizer: 'Himpunan Informatika'
            },
            '2025-08-30': {
                title: 'Malam Kesenian',
                description: 'Pertunjukan seni dari mahasiswa berbagai fakultas',
                time: '19:00 - 22:00',
                location: 'Gedung Kesenian',
                category: 'ukm',
                organizer: 'UKM Seni'
            }
        };

        const categoryColors = {
            'bem': '#3b82f6',        // Blue
            'kemahasiswaan': '#10b981', // Green
            'himpunan': '#f59e0b',   // Orange
            'ukm': '#8b5cf6',        // Purple
            'akademik': '#ef4444'    // Red
        };

        function getEventsForMonth(month, year) {
            const monthEvents = [];
            const monthStr = String(month + 1).padStart(2, '0');
            
            for (const [dateStr, eventData] of Object.entries(events)) {
                const [eventYear, eventMonth] = dateStr.split('-');
                if (eventYear == year && eventMonth == monthStr) {
                    if (activeCategory === 'all' || eventData.category === activeCategory) {
                        const day = parseInt(dateStr.split('-')[2]);
                        monthEvents.push({
                            day: day,
                            date: dateStr,
                            ...eventData
                        });
                    }
                }
            }
            
            return monthEvents.sort((a, b) => a.day - b.day);
        }

        function updateEventsList(month, year) {
            const monthEvents = getEventsForMonth(month, year);
            const eventsList = document.querySelector('.events-list');
            
            if (monthEvents.length === 0) {
                const categoryText = activeCategory === 'all' ? '' : ` kategori ${activeCategory}`;
                eventsList.innerHTML = `
                    <div class="no-events">
                        <p>Tidak ada kegiatan${categoryText} pada bulan ${monthNames[month]} ${year}</p>
                    </div>
                `;
                return;
            }
            
            eventsList.innerHTML = monthEvents.map(event => `
                <div class="event-item stagger-animation" data-category="${event.category}">
                    <div class="event-date">
                        <div class="event-day">${event.day}</div>
                        <div class="event-month">${monthNames[month].substring(0, 3)}</div>
                    </div>
                    <div class="event-details">
                        <div class="event-header">
                            <h4 class="event-title">${event.title}</h4>
                            <div class="event-category" style="background-color: ${categoryColors[event.category]}">${event.category.toUpperCase()}</div>
                        </div>
                        <p class="event-description">${event.description}</p>
                        <div class="event-meta">
                            <span class="event-time"><i class="fas fa-clock"></i> ${event.time}</span>
                            <span class="event-location"><i class="fas fa-map-marker-alt"></i> ${event.location}</span>
                            <span class="event-organizer"><i class="fas fa-users"></i> ${event.organizer}</span>
                        </div>
                    </div>
                </div>
            `).join('');
        }

        function generateCalendar(month, year) {
            const firstDay = new Date(year, month, 1).getDay();
            const daysInMonth = new Date(year, month + 1, 0).getDate();
            
            document.getElementById('monthYear').textContent = `${monthNames[month]} ${year}`;
            
            const calendarDays = document.getElementById('calendarDays');
            calendarDays.innerHTML = '';
            
            // Add empty cells for days before the first day of the month
            for (let i = 0; i < firstDay; i++) {
                const emptyDay = document.createElement('div');
                emptyDay.classList.add('calendar-day', 'empty');
                calendarDays.appendChild(emptyDay);
            }
            
            // Add days of the month
            for (let day = 1; day <= daysInMonth; day++) {
                const dayElement = document.createElement('div');
                dayElement.classList.add('calendar-day');
                dayElement.textContent = day;
                
                // Check if this day has an event
                const dateString = `${year}-${String(month + 1).padStart(2, '0')}-${String(day).padStart(2, '0')}`;
                if (events[dateString]) {
                    const event = events[dateString];
                    if (activeCategory === 'all' || event.category === activeCategory) {
                        dayElement.classList.add('has-event');
                        dayElement.style.setProperty('--event-color', categoryColors[event.category]);
                        dayElement.title = `${event.title} (${event.category.toUpperCase()})`;
                    }
                }
                
                // Highlight today
                if (day === currentDate.getDate() && month === currentDate.getMonth() && year === currentDate.getFullYear()) {
                    dayElement.classList.add('today');
                }
                
                calendarDays.appendChild(dayElement);
            }
            
            updateEventsList(month, year);
        }

        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', () => {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                // Add active class to clicked button
                btn.classList.add('active');
                // Update active category
                activeCategory = btn.dataset.category;
                // Regenerate calendar with new filter
                generateCalendar(currentMonth, currentYear);
            });
        });

        // Navigation event listeners
        document.getElementById('prevMonth').addEventListener('click', () => {
            currentMonth--;
            if (currentMonth < 0) {
                currentMonth = 11;
                currentYear--;
            }
            generateCalendar(currentMonth, currentYear);
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            currentMonth++;
            if (currentMonth > 11) {
                currentMonth = 0;
                currentYear++;
            }
            generateCalendar(currentMonth, currentYear);
        });

        // Initialize calendar
        generateCalendar(currentMonth, currentYear);
    </script>

</body>
</html>
