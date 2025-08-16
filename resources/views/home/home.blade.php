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
        <!-- Added filter buttons for custom date filtering -->
        <div class="calendar-filters">
            <button class="filter-btn active" data-filter="all">Semua</button>
            <button class="filter-btn" data-filter="today">Hari Ini</button>
            <button class="filter-btn" data-filter="week">Minggu Ini</button>
            <button class="filter-btn" data-filter="month">Bulan Ini</button>
        </div>
        <div class="calendar-controls">
            <button class="control-btn" id="prevMonth">&lt;</button>
            <div class="calendar-title" id="calendarTitle"></div>
            <button class="control-btn" id="nextMonth">&gt;</button>
          
        </div>
    </div>
    <!-- Added notification area for filter feedback -->
    <div class="calendar-notification" id="calendarNotification" style="display: none;"></div>
    <div class="calendar-container">
        <table class="calendar-table">
            <thead>
                <tr>
                    <th>Ming</th>
                    <th>Sen</th>
                    <th>Sel</th>
                    <th>Rab</th>
                    <th>Kam</th>
                    <th>Jum</th>
                    <th>Sab</th>
                </tr>
            </thead>
            <tbody id="calendarBody">
            </tbody>
        </table>
    </div>
    <div class="calendar-footer">
        <span class="powered-by"></span>
        <!-- Added real-time clock display -->
        <div class="current-time" id="currentTime"></div>
        <div class="footer-buttons">
            <button class="print-btn">Print</button>
            <button class="subscribe-btn">Subscribe</button>
        </div>
    </div>
</div>

<!-- Added moment.js CDN and calendar script -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/moment.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.4/locale/id.min.js"></script>
<script>
// Set moment.js to Indonesian locale
moment.locale('id');

class BladeCalendar {
    constructor() {
        this.currentDate = moment();
        this.selectedDate = null;
        this.currentFilter = 'all';
        this.init();
    }

    init() {
        this.render();
        this.bindEvents();
        this.updateClock();
        setInterval(() => this.updateClock(), 1000);
    }

    bindEvents() {
        // Navigation buttons
        document.getElementById('prevMonth').addEventListener('click', () => {
            this.currentDate.subtract(1, 'month');
            this.render();
        });

        document.getElementById('nextMonth').addEventListener('click', () => {
            this.currentDate.add(1, 'month');
            this.render();
        });

        // Filter buttons
        document.querySelectorAll('.filter-btn').forEach(btn => {
            btn.addEventListener('click', (e) => {
                document.querySelectorAll('.filter-btn').forEach(b => b.classList.remove('active'));
                e.target.classList.add('active');
                this.currentFilter = e.target.dataset.filter;
                this.applyFilter();
            });
        });
    }

    render() {
        const title = this.currentDate.format('MMMM YYYY');
        document.getElementById('calendarTitle').textContent = title;

        const startOfMonth = this.currentDate.clone().startOf('month');
        const endOfMonth = this.currentDate.clone().endOf('month');
        const startOfWeek = startOfMonth.clone().startOf('week');
        const endOfWeek = endOfMonth.clone().endOf('week');

        const calendarBody = document.getElementById('calendarBody');
        calendarBody.innerHTML = '';

        const current = startOfWeek.clone();
        
        while (current.isSameOrBefore(endOfWeek)) {
            const row = document.createElement('tr');
            
            for (let i = 0; i < 7; i++) {
                const cell = document.createElement('td');
                const dayNumber = current.date();
                
                cell.textContent = dayNumber;
                cell.dataset.date = current.format('YYYY-MM-DD');
                
                // Add classes for styling
                if (!current.isSame(this.currentDate, 'month')) {
                    cell.classList.add('other-month');
                }
                
                if (current.isSame(moment(), 'day')) {
                    cell.classList.add('today');
                }
                
                if (this.selectedDate && current.isSame(this.selectedDate, 'day')) {
                    cell.classList.add('selected');
                }

                // Click event for date selection
                cell.addEventListener('click', () => {
                    document.querySelectorAll('.calendar-table td').forEach(td => td.classList.remove('selected'));
                    cell.classList.add('selected');
                    this.selectedDate = current.clone();
                });

                row.appendChild(cell);
                current.add(1, 'day');
            }
            
            calendarBody.appendChild(row);
        }

        this.applyFilter();
    }

    applyFilter() {
        const cells = document.querySelectorAll('.calendar-table td');
        const notification = document.getElementById('calendarNotification');
        
        cells.forEach(cell => {
            cell.classList.remove('filtered', 'dimmed');
            
            const cellDate = moment(cell.dataset.date);
            let matches = false;
            
            switch (this.currentFilter) {
                case 'today':
                    matches = cellDate.isSame(moment(), 'day');
                    break;
                case 'week':
                    matches = cellDate.isSame(moment(), 'week');
                    break;
                case 'month':
                    matches = cellDate.isSame(moment(), 'month');
                    break;
                default:
                    matches = true;
            }
            
            if (this.currentFilter !== 'all') {
                if (matches) {
                    cell.classList.add('filtered');
                } else {
                    cell.classList.add('dimmed');
                }
            }
        });

        // Show notification
        if (this.currentFilter !== 'all') {
            const filterNames = {
                'today': 'Hari Ini',
                'week': 'Minggu Ini', 
                'month': 'Bulan Ini'
            };
            notification.textContent = `Filter aktif: ${filterNames[this.currentFilter]}`;
            notification.style.display = 'block';
        } else {
            notification.style.display = 'none';
        }
    }

    updateClock() {
        const clockElement = document.getElementById('currentTime');
        if (clockElement) {
            clockElement.textContent = moment().format('dddd, DD MMMM YYYY - HH:mm:ss');
        }
    }
}

// Initialize calendar when DOM is loaded
document.addEventListener('DOMContentLoaded', () => {
    new BladeCalendar();
});
</script>

<style>
/* Added styles for filter buttons and enhanced calendar */
.calendar-filters {
    display: flex;
    gap: 8px;
    margin-bottom: 16px;
    flex-wrap: wrap;
}

.filter-btn {
    padding: 8px 16px;
    border: 2px solid #e2e8f0;
    background: white;
    border-radius: 8px;
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.filter-btn:hover {
    border-color: #3b82f6;
    background: #eff6ff;
}

.filter-btn.active {
    background: linear-gradient(135deg, #f59e0b, #d97706);
    color: white;
    border-color: #f59e0b;
}

.calendar-notification {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
    padding: 8px 16px;
    border-radius: 6px;
    margin-bottom: 16px;
    font-size: 14px;
    text-align: center;
}

.calendar-table td.filtered {
    background: linear-gradient(135deg, #fbbf24, #f59e0b);
    color: white;
    font-weight: bold;
    position: relative;
}

.calendar-table td.filtered::after {
    content: '●';
    position: absolute;
    top: 2px;
    right: 4px;
    font-size: 8px;
    color: #dc2626;
}

.calendar-table td.dimmed {
    opacity: 0.3;
    background: #f8fafc;
}

.calendar-table td.today {
    background: linear-gradient(135deg, #3b82f6, #1d4ed8);
    color: white;
    font-weight: bold;
}

.calendar-table td.selected {
    background: linear-gradient(135deg, #10b981, #059669);
    color: white;
}

.current-time {
    font-size: 12px;
    color: #6b7280;
    font-weight: 500;
}

.calendar-controls {
    display: flex;
    align-items: center;
    gap: 16px;
    flex-wrap: wrap;
}

.control-btn {
    padding: 8px 12px;
    border: 1px solid #d1d5db;
    background: white;
    border-radius: 6px;
    cursor: pointer;
    transition: all 0.2s ease;
}

.control-btn:hover {
    background: #f3f4f6;
    border-color: #9ca3af;
}

@media (max-width: 768px) {
    .calendar-filters {
        justify-content: center;
    }
    
    .filter-btn {
        flex: 1;
        min-width: 80px;
    }
}
</style>
 
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

@push('scripts')
<script src="{{ asset('js/calendar.js') }}"></script>
@endpush