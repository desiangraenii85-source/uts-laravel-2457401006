# UTS Web Development - Aplikasi Manajemen Data Siswa

Project ini merupakan aplikasi web berbasis Laravel sederhana untuk memenuhi ujian tengah semester mata kuliah Web Development. Aplikasi ini menerapkan sistem CRUD (Create, Read, Update, Delete) satu tabel utama tanpa fitur autentikasi.

### Identitas Mahasiswa
* **Nama Lengkap:** Desih Angraeni
* **NIM:** 2457401006
* **Tema Soal:** Sekolah (Digit Terakhir NIM: 6)
* **Tabel Utama:** students

---

## Fitur Aplikasi
1. **Beranda:** Halaman utama yang berisi informasi nama aplikasi dan deskripsi tema.
2. **Daftar Siswa:** Menampilkan seluruh data siswa dengan tabel interaktif, pesan kondisi jika tabel kosong, serta notifikasi sukses.
3. **Tambah Data Siswa:** Form dengan input tipe tanggal, dropdown kelas, dan checkbox keaktifan yang dilengkapi pengondisian pesan error validasi serta fungsi `old()`.
4. **Detail Siswa:** Halaman profil lengkap untuk melihat seluruh rincian kolom data satu siswa.
5. **Ubah Data Siswa:** Form edit yang otomatis memuat data lama siswa untuk diperbarui.
6. **Hapus Data Siswa:** Aksi hapus data yang dilengkapi konfirmasi keamanan pop-up sebelum eksekusi.

---

## Daftar Kolom Tabel `students`
Berikut susunan kolom yang digunakan pada basis data `uts_2457401006`:

| Nama Kolom | Tipe Data | Sifat / Ketentuan |
| :--- | :--- | :--- |
| `id` | BigInteger | Primary Key, Auto Increment |
| `nis` | String | Unique, Wajib diisi (Angka) |
| `name` | String | Wajib diisi |
| `classroom` | String | Dropdown Pilihan (X IPA 1 / X IPS 1 / XI IPA 2) |
| `birth_date` | Date | Input Tanggal Valid |
| `average_score` | Decimal (5,2) | Angka Desimal (Nilai Rata-rata) |
| `is_active` | Boolean | Checkbox Status Keaktifan |
| `address` | Text | Nullable (Boleh kosong) |
| `parent_phone` | String | Kolom Tambahan Migration Baru (Nullable) |
| `created_at` | Timestamp | Otomatis bawaan Laravel |
| `updated_at` | Timestamp | Otomatis bawaan Laravel |

---

## Langkah Instalasi Project

Jika Anda ingin menjalankan project ini di komputer lokal, ikuti langkah-langkah berikut:

1. **Clone Repository**
   ```bash
   git clone https://github.com
   cd uts-laravel-2457401006
   ```

2. **Instalasi Dependency Composer**
   ```bash
   composer install
   ```

3. **Konfigurasi Environment File**
   Salin file `.env.example` menjadi `.env`:
   ```bash
   cp .env.example .env
   ```
   Buka file `.env` baru tersebut, lalu sesuaikan nama database Anda:
   ```env
   DB_DATABASE=uts_2457401006
   ```

4. **Generate Application Key**
   ```bash
   php artisan key:generate
   ```

5. **Menjalankan Migration dan Seeder (16 Data Siswa)**
   Pastikan MySQL server Anda (XAMPP/Laragon) sudah aktif, lalu jalankan:
   ```bash
   php artisan migrate --seed
   ```

6. **Instalasi Dependency NPM (Jika Menggunakan Asset Bundler)**
   ```bash
   npm install && npm run build
   ```

7. **Jalankan Aplikasi**
   ```bash
   php artisan serve
   ```
   Buka browser Anda dan akses melalui alamat `http://127.0.0.1:8000`.
