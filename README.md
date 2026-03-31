MINPRO 2 PBW

tugas implementasi data dari database ke website portofolio pribadi. Tugas ini merupakan lanjutan dari Tugas 1.

## Fitur & Perubahan
- Konversi ke PHP: Mengubah struktur file dari .html menjadi .php.
- Database Terintegrasi: Data profil (Nama, Bio, Deskripsi) diambil langsung dari database MySQL.
- Looping Data: Bagian Skills dan Certificates menggunakan perulangan PHP (`while`) sehingga data tampil secara dinamis.
- Koneksi Database: Menggunakan mysqli_connect untuk menjembatani kode PHP dengan server MySQL.

## Tools yang Digunakan
- Bahasa: PHP (Native)
- Database: MySQL
- Framework CSS: Bootstrap 5
- Server Lokal: Laragon

## Struktur Folder
- index.php : Halaman utama website.
- koneksi.php : File konfigurasi koneksi ke database.
- style.css : File styling kustom.
- portofolio.sql : File export database untuk di-import.
- foto_profil.jpg : Foto profil yang ditampilkan di website.

## 📝 Cara Menjalankan Project
1. Clone repository ini ke folder `www` (Laragon) atau `htdocs` (XAMPP).
2. Nyalakan Apache dan MySQL.
3. Buka **phpMyAdmin**, buat database baru bernama `db_portofolio`.
4. Import file `db_portofolio.sql` ke database tersebut.
5. Akses melalui browser di alamat `localhost/nama_folder_kamu`.

---
**Dibuat oleh:** Irvani Canlusty Missa  
**Matakuliah:** Pemrograman Berbasis Web (PBW)
