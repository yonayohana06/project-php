# Rencana Setup Project PHP dengan Laravel

Rencana ini berisi langkah-langkah high-level untuk melakukan inisiasi proyek PHP menggunakan framework Laravel, lengkap dengan halaman awal "Hello World", styling CSS sederhana, dan setup Dockerfile.

---

## 1. Inisiasi Project Laravel
- Menginstal Laravel menggunakan Composer secara lokal atau melalui container sementara.
- Mengatur konfigurasi dasar pada file `.env` (seperti nama aplikasi, environment, dan database jika diperlukan).

## 2. Pembuatan Halaman Root / Home ("Hello World")
- Menyiapkan route `/` di file `routes/web.php` untuk mengarah ke view atau controller tertentu.
- Membuat view template sederhana di `resources/views/welcome.blade.php` atau file baru (misal `home.blade.php`).
- Menampilkan tulisan **"Hello World"** pada halaman tersebut.

## 3. Penerapan CSS Sederhana (Tanpa NPM)
- Menggunakan CSS vanilla yang diletakkan langsung di direktori `public/css/` atau menggunakan inline/internal styling pada file Blade.
- Tidak melakukan instalasi dependencies frontend (seperti Tailwind CSS via npm, Bootstrap via npm, dll.) dan tidak menjalankan proses build (`npm run dev`/`npm run build`).

## 4. Pembuatan Dockerfile
- Membuat file `Dockerfile` di root project untuk containerization aplikasi PHP.
- Menyiapkan environment PHP (misalnya menggunakan image PHP dengan Apache/Nginx atau PHP-FPM).
- Menyalin source code aplikasi ke dalam container dan mengatur permission yang sesuai.
- Menambahkan konfigurasi server/service port yang akan diekspos (misal port 80 atau 8000).
