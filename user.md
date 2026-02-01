# Informasi Login Masj.id

Berikut adalah daftar user yang tersedia untuk pengujian aplikasi:

## 1. Masjid Admin (Pengurus)

User ini memiliki akses ke Dashboard Masjid (Profil, Pengurus, Berita, Program, dll).

| Nama           | Email              | Password     | Role     | Masjid           |
| :------------- | :----------------- | :----------- | :------- | :--------------- |
| Bambang Sutejo | `sutejo@gmail.com` | `bandung123` | Pengurus | Masjid Istiqomah |
| Mas Joko       | `joko@gmail.com`   | `bandung123` | Pengurus | -                |

> [!TIP]
> Semua user di atas terdaftar dengan role `user` di tabel `users`. Status **Pengurus** ditentukan oleh relasi di tabel `masjid_pengurus`.

## 2. System Admin (Super Admin)

_Belum ada akun Super Admin default di database._

Untuk membuat akun Super Admin, Anda dapat menambahkan user baru di tabel `users` dengan email baru dan role `admin` (jika sistem otorisasi sudah mendukung role tersebut).

---

_File ini dibuat otomatis untuk dokumentasi pengembangan._
