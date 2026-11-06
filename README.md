# LaravelCloudCom

Project backend Laravel yang disiapkan untuk pengembangan cloud computing / web service.

---

## 📋 Prasyarat (Requirements)

Sebelum menjalankan project, pastikan Anda memiliki tools berikut:
* **PHP**: Versi `>= 8.2` (Project ini menggunakan PHP 8.4 via Laravel Herd)
* **Composer**: Versi 2.x
* **Node.js & NPM**: Untuk build assets frontend / Vite
* **Database**: **SQLite** (Default bawaan Laravel, **tidak memerlukan XAMPP**)

---

## 🚀 Cara Menjalankan Project (Quick Start)

### 1. Masuk ke Direktori Project
Buka aplikasi **Terminal** di Mac Anda, lalu masuk ke folder project:
```bash
cd /Users/seantandjaja/Documents/Codes/LaravelCloudCom
```

---

### 2. Jalankan Local Server Laravel
Jalankan development server menggunakan Artisan:
```bash
php artisan serve
```

Setelah perintah dijalankan, server akan aktif di:
👉 **[http://127.0.0.1:8000](http://127.0.0.1:8000)** *(Buka URL ini di browser)*

> **Tips:** Tekan `Ctrl + C` di terminal kapan saja untuk menghentikan server.

---

### 3. (Opsional) Jalankan Frontend Dev Server (Vite)
Jika Anda mengembangkan tampilan UI / Blade dengan Vite:
Buka tab terminal baru dan jalankan:
```bash
npm install
npm run dev
```

---

## ⚙️ Setup Ulang dari Awal (Jika Clone / Reset)

Jika project ini dipindahkan atau di-clone dari repository baru, lakukan langkah setup berikut:

```bash
# 1. Install dependensi PHP
composer install

# 2. Salin environment file
cp .env.example .env

# 3. Generate Application Key
php artisan key:generate

# 4. Buat file SQLite dan jalankan database migrations
touch database/database.sqlite
php artisan migrate

# 5. Install dependensi frontend
npm install
```

---

## 🗄️ Database: Apakah Butuh XAMPP?

**Tidak perlu.** Project ini secara default dikonfigurasi menggunakan **SQLite**:
* Database tersimpan otomatis dalam satu file di [`database/database.sqlite`](file:///Users/seantandjaja/Documents/Codes/LaravelCloudCom/database/database.sqlite).
* Tidak memerlukan service database eksternal seperti Apache/MySQL dari XAMPP.

---

## 🔧 Catatan Tambahan & Troubleshooting

### Jika muncul error `php: command not found`:
Pastikan path PHP dari Laravel Herd terbaca di terminal:
```bash
export PATH="/Users/seantandjaja/Library/Application Support/Herd/bin:$PATH"
```

### Jika muncul peringatan terkait `Herd.app` / `dump-loader.php`:
Pastikan baris berikut sudah dinonaktifkan/dikomentari di `/Users/seantandjaja/Library/Application Support/Herd/config/php/84/php.ini`:
```ini
; auto_prepend_file=/Applications/Herd.app/Contents/Resources/valet/dump-loader.php
; extension=/Applications/Herd.app/Contents/Resources/herd-ext/herd-84-arm64.so
```
