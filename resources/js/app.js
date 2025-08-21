import './bootstrap';
import Alpine from 'alpinejs';
import AOS from 'aos';

window.Alpine = Alpine;
Alpine.start();

// Inisialisasi AOS (Animasi Scroll)
AOS.init({ duration: 800, once: true, offset: 100 });

// Fungsi Kalender untuk AlpineJS
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

// Penting: Agar AlpineJS bisa menemukan fungsi `calendar`, kita harus menaruhnya di object `window`.
window.calendar = calendar;