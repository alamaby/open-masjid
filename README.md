# Masj.id - Manajemen Masjid Modern & Transparan

**Masj.id** adalah platform digital komprehensif yang dirancang untuk memodernisasi tata kelola masjid dan meningkatkan transparansi antara pengelola masjid (DKM) dengan jamaahnya. Platform ini menyediakan alat manajemen yang kuat untuk kegiatan, keuangan, serta pemberdayaan sosial berbasis masjid.

## ✨ Fitur Utama

- **Landing Page Modern**: Tampilan publik yang profesional, informatif, dan responsif.
- **Sistem Multi-Role**: Fitur registrasi khusus untuk **Masjid** (Pengelola) dan **Jamaah** (Personal/Donatur).
- **Dashboard Masjid**: Panel kontrol lengkap untuk pengelola yang mencakup:
  - Ringkasan statistik jamaah dan dana.
  - Progress pendanaan program (Crowdfunding/Donasi Teks).
  - Kalender kegiatan dan agenda rutin.
  - Alert sosial untuk bantuan warga terpilih.
- **Transparansi Keuangan**: Laporan donasi dan pengeluaran yang dapat diakses secara publik untuk meningkatkan kepercayaan jamaah.
- **Pusat Bantuan & Panduan**: Dokumentasi lengkap penggunaan sistem bagi admin maupun jamaah.

## 🚀 Teknologi yang Digunakan

- **Backend**: [CodeIgniter 4](https://codeigniter.com/) (PHP 8+)
- **Frontend**: [Tailwind CSS](https://tailwindcss.com/)
- **Ikonografi**: [Material Symbols](https://fonts.google.com/icons)
- **Database**: MySQL / MariaDB (Konfigurasi via `.env`)

## 🛠️ Instalasi & Setup Lokal

1. **Clone Repositori**

   ```bash
   git clone https://github.com/motiolabs-space/masjid2.git
   cd masjid2
   ```

2. **Konfigurasi Environment**
   - Masuk ke direktori `app-core`.
   - Salin file `env` menjadi `.env`.
   - Sesuaikan konfigurasi database dan `baseURL` seperti berikut:
     ```ini
     app.baseURL = 'http://localhost/masjid2/public/'
     database.default.hostname = localhost
     database.default.database = nama_database_anda
     database.default.username = user_anda
     database.default.password = password_anda
     ```

3. **Install Dependencies** (Jika diperlukan)

   ```bash
   composer install
   ```

4. **Menjalankan Aplikasi**
   - Akses via web server (XAMPP/Laragon) di: `http://localhost/masjid2/`
   - Buka **Halaman Admin** di: `http://localhost/masjid2/dashboard` (setelah setup login).

## 📄 Struktur Direktori

- `app-core/`: Berisi logika inti aplikasi (MVC CodeIgniter 4).
- `public/`: Direktori publik untuk aset dan index utama.
- `.htaccess`: Konfigurasi routing server.

## 🤝 Kontribusi

Proyek ini dikembangkan untuk kemaslahatan umat. Jika Anda ingin berkontribusi, silakan lakukan fork dan kirimkan Pull Request.

---

© 2024 Masj.id - Memberdayakan Masjid melalui Teknologi.
