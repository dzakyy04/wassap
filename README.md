# WASSAP

Website Portal Berita, Website ini dibuat dengan :

1. PHP
2. Laravel
3. Livewire
4. Laravel UI
5. MySQL
6. Bootstrap
7. SwiperJs
8. ChartJs
9. NiceAdmin Template Dashboard

## Kebutuhan

Untuk menjalankan website ini, dibutuhkan :

1. PHP versi 8.1 - 8.2
2. Composer
3. NodeJs
4. MySQL
5. Koneksi internet

## Instalasi

Clone Repositori

    git clone https://github.com/dzakyy04/wassap.git

Pindah ke folder repo

    cd wassap

Install semua depedencies menggunakan composer

    composer install

Install node package manager

    npm install

Copy contoh file env dan buat perubahan konfigurasi yang diperlukan di file .env

    cp .env.example .env

Jalankan migrasi database (**Atur koneksi database di .env sebelum melakukan migrasi**)

    php artisan migrate

Seed database

    php artisan migrate:fresh --seed

Mulai local development server

    php artisan serve

Sekarang website dapat diakases di http://localhost:8000

## Kredensial

-   User
    -   Email : user@gmail.com
    -   Password : password
-   Admin
    -   Email : admin@gmail.com
    -   Password : password
