# Warga Simpel

Warga Simpel adalah website yang dirancang untuk memudahkan masyarakat dalam pengajuan surat ke kelurahan tanpa perlu datang ke balai desa. Dengan Warga Simpel, warga dapat mengajukan berbagai jenis surat secara online, menghemat waktu, dan menghindari antrean panjang.

Website ini bertujuan untuk meningkatkan efisiensi layanan administrasi kelurahan serta memberikan kemudahan bagi masyarakat dalam mengurus keperluan surat-menyurat dengan lebih praktis dan cepat.

## Features

- **Autentikasi dengan Verifikasi Email**: Pengguna harus mendaftar dan memverifikasi email mereka sebelum dapat mengajukan surat.
- **Pengajuan Surat Online**: Warga dapat mengajukan berbagai jenis surat tanpa harus datang langsung ke balai desa.
- **Responsive**: Tampilan web yang optimal di berbagai perangkat.


## Tech Stack

- **Backend**: Laravel
- **Frontend**: Tempalating Blade Engine, TailwindCSS for Styling
- **Database**: MySQL
- **Others**: Javascript


## Demo Project

Web saat ini masih dalam pengembangan (local)


## Preview

![App Screenshot](https://github.com/irsyamokta/assets/blob/f5d448809ee856d75eb20b503c07800c81c9d82f/warga-simpel/1.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/f5d448809ee856d75eb20b503c07800c81c9d82f/warga-simpel/2.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/f5d448809ee856d75eb20b503c07800c81c9d82f/warga-simpel/3.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/f5d448809ee856d75eb20b503c07800c81c9d82f/warga-simpel/4.png)

![App Screenshot](https://github.com/irsyamokta/assets/blob/f5d448809ee856d75eb20b503c07800c81c9d82f/warga-simpel/6.png)

## Panduan Instalasi
Ikuti langkah-langkah berikut untuk menginstal Warga Simpel di lokal Anda:
<br>Nb. Pastikan lokal server Anda sudah berjalan, bisa menggunakan XAMPP, Laragon, atau sejenisnya.

1. **Clone Repository**
   ```bash
   git clone https://github.com/irsyamokta/warga-simpel.git
   
2. **Masuk ke Direktori Proyek Setelah repositori ter-clone**
   ```bash
   cd warga-simpel
    
3. **Install Dependencies Pastikan Anda sudah menginstal Composer dan Node.js**
   ```bash
   composer install
   npm install
   
4. **Konfigurasi .env**
   ```bash
   cp .env.example .env
   
5. **Generate Key Aplikasi**
   ```bash
   php artisan key:generate
   
6. **Migrasi Database**
   Karena adanya foreign key, jalankan perintah migrasi berikut secara berurutan untuk memastikan migrasi berhasil:
   ```bash
   php artisan migrate
   
7. **Install NPM Assets**
   ```bash
   npm run dev
   
8. **Jalankan Server**
   ```bash
   php artisan serve

9. Akses aplikasi melalui browser di alamat http://localhost:8000.

## Issue
Jika Anda menemui masalah atau membutuhkan bantuan lebih lanjut, silakan buka issue di GitHub atau hubungi saya.

## Authors

- [@irsyamokta](https://github.com/irsyamokta)
