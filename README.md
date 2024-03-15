**PHP OOP (Object-Oriented Programming)**

1. **Kelas (Class)** dan **Objek (Object)**
   - Kelas adalah blueprint atau cetakan dari objek
   - Objek adalah instance dari kelas
   - Kelas dapat memiliki properti (properties) dan metode (methods)

2. **Membuat Kelas dan Objek**
   - Sintaks untuk membuat kelas: `class NamaKelas { /* definisi kelas */ }`
   - Membuat objek dari kelas: `$objek = new NamaKelas();`

3. **Properti dan Metode**
   - Properti adalah variabel yang dimiliki oleh kelas
   - Metode adalah fungsi yang dimiliki oleh kelas
   - Mengakses properti dan metode dengan operator panah (`->`)

4. **Visibility (Hak Akses)**
   - `public` dapat diakses dari mana saja
   - `protected` dapat diakses dari kelas itu sendiri dan kelas turunannya
   - `private` hanya dapat diakses dari kelas itu sendiri

5. **Konstruktor**
   - Fungsi khusus yang akan dijalankan secara otomatis saat objek dibuat
   - Ditandai dengan nama `__construct()`

6. **Pewarisan (Inheritance)**
   - Konsep untuk membentuk hierarki kelas
   - Kelas turunan (child class) dapat mewarisi properti dan metode dari kelas induk (parent class)
   - Menggunakan kata kunci `extends`

7. **Overriding**
   - Mendefinisikan ulang metode yang diwarisi dari kelas induk pada kelas turunan

8. **Static**
   - Properti dan metode yang dapat diakses tanpa membuat instance objek
   - Ditandai dengan kata kunci `static`

9. **Konstanta**
   - Nilai yang tidak dapat diubah setelah dideklarasikan
   - Ditandai dengan kata kunci `const`

10. **Interface dan Abstrak**
    - Interface adalah kumpulan metode abstrak yang harus diimplementasikan oleh kelas yang menggunakannya
    - Kelas abstrak adalah kelas yang tidak dapat diinstansiasi, tetapi dapat diwarisi oleh kelas lain

**PHP Data Object (PDO)**

1. **Pengantar PDO**
   - PDO (PHP Data Object) adalah ekstensi PHP untuk mengakses database
   - Menyediakan antarmuka yang konsisten untuk berbagai jenis database (MySQL, PostgreSQL, SQLite, Oracle, dll.)

2. **Koneksi ke Database**
   - Membuat instance PDO dengan menggunakan `new PDO()`
   - Menyediakan parameter seperti DSN (Data Source Name), username, dan password

3. **Query Database**
   - Menggunakan metode `query()` atau `prepare()`
   - `query()` untuk query langsung
   - `prepare()` untuk menyiapkan pernyataan terlebih dahulu (prepared statement)

4. **Binding Parameter**
   - Mengikat nilai ke parameter pada prepared statement
   - Menggunakan metode `bindParam()` atau `bindValue()`

5. **Mengambil Data**
   - Menggunakan metode `fetch()` atau `fetchAll()`
   - `fetch()` untuk mengambil satu baris data
   - `fetchAll()` untuk mengambil semua baris data

6. **Penanganan Error**
   - Menggunakan metode `errorInfo()` untuk mendapatkan informasi error
   - Menggunakan try-catch untuk menangani exception

7. **Transaksi**
   - Menggunakan metode `beginTransaction()`, `commit()`, dan `rollBack()`
   - Memastikan integritas data dalam operasi yang melibatkan beberapa query

8. **Prepared Statement**
   - Melindungi dari serangan SQL Injection
   - Meningkatkan performa dengan menggunakan query yang sudah dikompilasi sebelumnya

9. **Koneksi Persisten**
   - Menjaga koneksi ke database tetap terbuka untuk permintaan berikutnya
   - Menggunakan opsi `PDO::ATTR_PERSISTENT` saat membuat instance PDO

10. **Dukungan Database Lain**
    - PDO mendukung berbagai jenis database seperti MySQL, PostgreSQL, SQLite, Oracle, dll.
    - Hanya perlu mengubah DSN saat menggunakan database yang berbeda

Ini adalah gambaran umum tentang PHP OOP dan PDO. Jika Anda membutuhkan penjelasan lebih detail atau contoh kode, jangan ragu untuk bertanya.