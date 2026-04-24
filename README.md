<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# 🌸 Laravel Chirper

<p align="center">
  <strong>Project Pemrograman Web Lanjut</strong>
</p>

---

## 👩‍💻 Identitas

| Keterangan | Data |
|---|---|
| Nama | Halena Kamila Madani |
| Mata Kuliah | Pemrograman Web Lanjut |
| Project | Laravel Chirper |
| Framework | Laravel |
| Database | SQLite |

---

## 📌 Deskripsi Project

Laravel Chirper adalah aplikasi web sederhana berbasis Laravel yang dibuat untuk mempraktikkan konsep:

- Model View Controller
- Database
- Model Eloquent
- Relasi antar tabel
- CRUD
- Validasi form
- Middleware
- Autentikasi dasar

Aplikasi ini memungkinkan pengguna untuk membuat akun, login, membuat chirp, melihat feed chirp, mengedit chirp, menghapus chirp, dan logout.

Project ini dibuat sebagai hasil praktik pembelajaran Laravel pada mata kuliah **Pemrograman Web Lanjut**.

---

## ✨ Fitur Aplikasi

- Menampilkan daftar chirp pada halaman feed
- Menambahkan chirp baru melalui form
- Mengedit chirp yang dimiliki user
- Menghapus chirp yang dimiliki user
- Registrasi user baru
- Login user
- Logout user
- Validasi input form
- Proteksi route menggunakan middleware
- Menyimpan chirp berdasarkan user yang sedang login
- User hanya dapat mengedit dan menghapus chirp miliknya sendiri

---

## 🔐 Akun Demo

```text
Email    : halena@gmail.com
Password : password123
🛠️ Teknologi yang Digunakan
Laravel
PHP
Blade Template
Eloquent ORM
SQLite
Tailwind CSS
DaisyUI
Git
GitHub
🧩 Konsep yang Diterapkan

Project ini menerapkan konsep MVC, yaitu Model View Controller.

Model digunakan untuk mengelola data dan relasi database.

View digunakan untuk menampilkan halaman web kepada pengguna.

Controller digunakan untuk mengatur request, validasi, proses data, dan menghubungkan model dengan view.

Selain MVC, project ini juga menerapkan konsep CRUD.

Operasi	Keterangan
Create	User dapat membuat chirp baru
Read	User dapat melihat daftar chirp
Update	User dapat mengedit chirp miliknya
Delete	User dapat menghapus chirp miliknya
🗃️ Database

Aplikasi ini menggunakan database SQLite.

Tabel utama yang digunakan:

Tabel	Fungsi
users	Menyimpan data pengguna
chirps	Menyimpan data chirp

Relasi database:

1 User dapat memiliki banyak Chirp
1 Chirp dimiliki oleh 1 User
🚀 Cara Menjalankan Project

Clone repository dari GitHub:

git clone https://github.com/username/nama-repository.git

Masuk ke folder project:

cd nama-repository

Install dependency PHP:

composer install

Install dependency Node.js:

npm install

Salin file environment:

copy .env.example .env

Generate application key:

php artisan key:generate

Buat database SQLite:

type nul > database/database.sqlite

Atur database pada file .env:

DB_CONNECTION=sqlite

Jalankan migration:

php artisan migrate

Jalankan server Laravel:

php artisan serve

Buka aplikasi di browser:

http://127.0.0.1:8000
🧪 Cara Menggunakan Aplikasi
Buka halaman utama aplikasi melalui browser.
Klik tombol Sign Up untuk membuat akun baru.
Setelah registrasi berhasil, user otomatis login.
User dapat menulis chirp melalui form pada halaman feed.
Chirp yang dibuat akan langsung tampil pada halaman feed.
User dapat mengedit chirp miliknya sendiri melalui tombol Edit.
User dapat menghapus chirp miliknya sendiri melalui tombol Delete.
User dapat keluar dari akun menggunakan tombol Logout.
User dapat login kembali melalui tombol Sign In.
🔒 Sistem Autentikasi

Aplikasi ini memiliki sistem autentikasi dasar.

User dapat melakukan register, login, dan logout.

Password user disimpan secara aman menggunakan fitur Hash dari Laravel.

Session dibuat ketika user berhasil login.

Session akan dihapus ketika user melakukan logout.

Route tertentu dilindungi menggunakan middleware auth, sehingga hanya user yang sudah login yang dapat membuat, mengedit, dan menghapus chirp.

Middleware guest digunakan agar halaman login dan register hanya dapat diakses oleh user yang belum login.

✅ Status Pengerjaan
Modul	Status
What are we building?	Selesai
Setting up your Laravel project	Selesai
Your first route	Selesai
Deploying your app	Selesai
What is MVC?	Selesai
Working with the database	Selesai
Our first model	Selesai
Showing the feed	Selesai
Creating and storing Chirps	Selesai
Edit and delete Chirps	Selesai
Basic authentication: Registration	Selesai
Basic authentication: Login/Logout	Selesai
📝 Catatan

File dan folder berikut tidak perlu di-upload ke GitHub:

.env
vendor
node_modules
database/database.sqlite

File tersebut tidak perlu diunggah karena berisi konfigurasi lokal, dependency, dan database lokal.

🌼 Kesimpulan

Project Laravel Chirper berhasil dibuat dengan menerapkan konsep MVC, routing, controller, database migration, model Eloquent, relasi antar tabel, CRUD, validasi form, middleware, dan autentikasi dasar.

Aplikasi ini dapat digunakan oleh user untuk register, login, membuat chirp, melihat feed chirp, mengedit chirp, menghapus chirp, dan logout.

Dengan project ini, pemahaman dasar pengembangan aplikasi web menggunakan Laravel menjadi lebih terstruktur, praktis, dan mudah dipahami.

👑 Pembuat

Halena Kamila Madani
Pemrograman Web Lanjut
Laravel Chirper Project
