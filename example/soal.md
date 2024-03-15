Anda diminta untuk membuat sebuah aplikasi sederhana untuk mengelola data buku di sebuah perpustakaan. Aplikasi ini harus memiliki fitur untuk menambah, mengedit, menghapus, dan menampilkan daftar buku yang tersedia di perpustakaan.

Buatlah kode program PHP menggunakan konsep OOP dan PDO untuk memenuhi kebutuhan aplikasi tersebut. Rancangan database untuk tabel buku adalah sebagai berikut:

```sql
CREATE TABLE buku (
    id INT AUTO_INCREMENT PRIMARY KEY,
    judul VARCHAR(100) NOT NULL,
    pengarang VARCHAR(100) NOT NULL,
    tahun_terbit INT NOT NULL
);
```

Jawab:

1. Buat dua kelas: 
    - Buku untuk merepresentasikan sebuah buku dengan properti judul, pengarang, dan tahun terbit
    - DatabaseHelper untuk menangani koneksi dan operasi database menggunakan PDO

2. Implementasikan metode CRUD (Create, Read, Update, Delete) pada kelas DatabaseHelper untuk menambah, mengedit, menghapus, dan mendapatkan daftar buku. Gunakan prepared statement untuk menghindari serangan SQL Injection dan meningkatkan performa.

3. Buat file index.php untuk menampilkan contoh penggunaan aplikasi. Lakukan operasi CRUD pada data buku menggunakan kelas DatabaseHelper.

