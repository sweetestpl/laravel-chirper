<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

╔════════════════════════════════════════════════════════════╗
║                    🌸 LARAVEL CHIRPER 🌸                 ║
║              Project Pemrograman Web Lanjut               ║
╚════════════════════════════════════════════════════════════╝


👩‍💻 IDENTITAS

Nama        : Halena Kamila Madani
Mata Kuliah : Pemrograman Web Lanjut
Project     : Laravel Chirper
Framework   : Laravel
Database    : SQLite


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

📌 DESKRIPSI PROJECT

Laravel Chirper adalah aplikasi web sederhana berbasis Laravel
yang dibuat untuk mempraktikkan konsep MVC, database, model
Eloquent, CRUD, validasi form, dan autentikasi dasar.

Aplikasi ini memungkinkan user untuk membuat akun, login,
membuat chirp, mengedit chirp, menghapus chirp, logout, dan
melihat feed chirp dari user lain.

Project ini dibuat sebagai hasil praktik pembelajaran Laravel
pada mata kuliah Pemrograman Web Lanjut.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

✨ FITUR APLIKASI

🌷 Menampilkan feed chirp
🌷 Menambahkan chirp baru
🌷 Mengedit chirp
🌷 Menghapus chirp
🌷 Registrasi user
🌷 Login user
🌷 Logout user
🌷 Validasi input form
🌷 Proteksi route menggunakan middleware
🌷 Chirp tersimpan berdasarkan user yang sedang login
🌷 User hanya dapat mengedit dan menghapus chirp miliknya sendiri


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🔐 AKUN DEMO

Email    : halena@gmail.com
Password : password123


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🛠️ TEKNOLOGI YANG DIGUNAKAN

Laravel
PHP
Blade Template
Eloquent ORM
SQLite
Tailwind CSS
DaisyUI
Git
GitHub


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🧩 KONSEP YANG DITERAPKAN

Project ini menerapkan konsep MVC atau Model View Controller.

Model digunakan untuk mengelola data dan relasi database.
View digunakan untuk menampilkan halaman web kepada user.
Controller digunakan untuk mengatur request, validasi, proses
data, dan menghubungkan model dengan view.

Selain itu, project ini juga menerapkan konsep CRUD, yaitu
Create, Read, Update, dan Delete pada data chirp.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🗃️ DATABASE

Aplikasi ini menggunakan database SQLite.

Tabel utama yang digunakan adalah users dan chirps.

Tabel users digunakan untuk menyimpan data pengguna.
Tabel chirps digunakan untuk menyimpan data pesan atau chirp.

Relasi yang digunakan:

1 User dapat memiliki banyak Chirp.
1 Chirp dimiliki oleh 1 User.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🚀 CARA MENJALANKAN PROJECT

1. Clone repository dari GitHub

   git clone https://github.com/username/nama-repository.git

2. Masuk ke folder project

   cd nama-repository

3. Install dependency PHP

   composer install

4. Install dependency Node.js

   npm install

5. Salin file environment

   copy .env.example .env

6. Generate application key

   php artisan key:generate

7. Buat database SQLite

   type nul > database/database.sqlite

8. Atur database pada file .env

   DB_CONNECTION=sqlite

9. Jalankan migration

   php artisan migrate

10. Jalankan server Laravel

   php artisan serve

11. Buka aplikasi di browser

   http://127.0.0.1:8000


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🧪 CARA MENGGUNAKAN APLIKASI

Buka halaman utama aplikasi melalui browser.

Klik tombol Sign Up untuk membuat akun baru.

Setelah register berhasil, user akan otomatis login.

User dapat menulis chirp melalui form yang tersedia.

Chirp yang dibuat akan muncul di halaman feed.

User dapat mengedit chirp miliknya sendiri melalui tombol Edit.

User dapat menghapus chirp miliknya sendiri melalui tombol Delete.

User dapat keluar dari akun menggunakan tombol Logout.

User dapat login kembali melalui tombol Sign In.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🔒 SISTEM AUTENTIKASI

Aplikasi ini memiliki sistem autentikasi dasar.

User dapat melakukan register, login, dan logout.

Password user disimpan secara aman menggunakan fitur Hash dari
Laravel.

Route tertentu dilindungi menggunakan middleware auth sehingga
hanya user yang sudah login yang dapat membuat, mengedit, dan
menghapus chirp.

Middleware guest digunakan agar halaman login dan register hanya
dapat diakses oleh user yang belum login.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🔄 CRUD CHIRP

Create
User dapat membuat chirp baru melalui form.

Read
Semua chirp ditampilkan pada halaman feed.

Update
User dapat mengedit chirp miliknya sendiri.

Delete
User dapat menghapus chirp miliknya sendiri.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

✅ STATUS PENGERJAAN

What are we building?                  : Selesai
Setting up your Laravel project        : Selesai
Your first route                       : Selesai
Deploying your app                     : Selesai
What is MVC?                           : Selesai
Working with the database              : Selesai
Our first model                        : Selesai
Showing the feed                       : Selesai
Creating and storing Chirps            : Selesai
Edit and delete Chirps                 : Selesai
Basic authentication: Registration     : Selesai
Basic authentication: Login/Logout     : Selesai


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

📝 CATATAN

File dan folder berikut tidak perlu di-upload ke GitHub:

.env
vendor
node_modules
database/database.sqlite

File tersebut tidak perlu diunggah karena berisi konfigurasi lokal,
dependency, dan database lokal.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

🌼 KESIMPULAN

Project Laravel Chirper berhasil dibuat dengan menerapkan konsep
MVC, routing, controller, database migration, model Eloquent,
relasi antar tabel, CRUD, validasi form, middleware, dan
autentikasi dasar.

Aplikasi ini dapat digunakan oleh user untuk register, login,
membuat chirp, mengedit chirp, menghapus chirp, dan logout.

Dengan project ini, pemahaman dasar pengembangan aplikasi web
menggunakan Laravel menjadi lebih terstruktur dan mudah dipahami.


━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━━

👑 PEMBUAT

Halena Kamila Madani
Pemrograman Web Lanjut
Laravel Chirper Project

╔════════════════════════════════════════════════════════════╗
║                 Terima kasih sudah mencoba                ║
║                    Laravel Chirper 🌸                     ║
╚════════════════════════════════════════════════════════════╝
