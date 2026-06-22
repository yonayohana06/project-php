# Rencana Fitur Registrasi User

Rencana *high-level* untuk menambahkan fitur registrasi user ke dalam aplikasi Laravel.

---

## 1. Setup Database MySQL di Docker Compose
- Menambahkan service `db` menggunakan image `mysql:8.0` pada `docker-compose.yml`.
- Mengatur environment variables untuk database (nama database, username, password root, dll).
- Menghubungkan service `app` (Laravel) dengan service `db` agar dapat berkomunikasi dalam satu network.

## 2. Konfigurasi Environment & Migrasi Database
- Menyesuaikan file `.env` untuk menggunakan MySQL container sebagai database host.
- Membuat/menyesuaikan file migration untuk tabel `users` agar menyimpan kolom:
  - `nama_lengkap` (atau `name`)
  - `email` (bersifat unique)
  - `password` (untuk menyimpan hash bcrypt)
- Menjalankan migrasi database via Artisan di dalam container.

## 3. Pembuatan Form Registrasi (Tampilan & CSS)
- Membuat halaman form registrasi sederhana di `resources/views/auth/register.blade.php`.
- Form akan mengumpulkan input: Nama Lengkap, Email, Password, dan Konfirmasi Password.
- Menggunakan CSS vanilla yang bersih dan minimalis untuk styling form, tanpa instalasi npm package atau build tools tambahan.

## 4. Implementasi Controller & Enkripsi Password
- Membuat controller untuk menangani logika registrasi (misalnya `RegisterController`).
- Menambahkan validasi input (nama wajib diisi, email valid & belum terdaftar, password minimal panjang tertentu).
- Melakukan enkripsi password menggunakan **bcrypt** (`Hash::make()` bawaan Laravel) sebelum disimpan ke database.
- Menyimpan data user baru ke database dan melakukan redirect ke halaman sukses atau home setelah berhasil.
