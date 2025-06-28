# Praktikum 1: PHP Framework (CodeIgniter)

## Langkah-langkah Praktikum

### 1. Persiapan

- Mengaktifkan ekstensi PHP yang dibutuhkan
  ![Gambar 1](screenshots/1.png)

### 2. Instalasi CodeIgniter 4

- Mengunduh dan mengekstrak CodeIgniter 4
  ![Gambar 2](screenshots/2.png)

### 3. Menjalankan CLI

- Menggunakan Command Line Interface
  ![Gambar 3](screenshots/3.png)

### 4. Mengaktifkan Mode Debugging

- Mengubah file env menjadi .env
  ![Gambar 4](screenshots/4.png)

### 5. Membuat Route Baru

- Menambahkan route di Routes.php
  ![Gambar 5](screenshots/5.png)

### 6. Membuat Controller

- Membuat file Page.php
  ![Gambar 6](screenshots/6.png)

### 7. Membuat View

- Membuat file about.php
  ![Gambar 7](screenshots/7.png)

### 8. Membuat Layout Web dengan CSS

- Membuat template header dan footer
  ![Gambar 81](screenshots/81.png)
  ![Gambar 82](screenshots/82.png)
  ![Gambar 83](screenshots/83.png)

## Pertanyaan dan Tugas

Saya telah melengkapi kode program untuk menu lainnya yang ada pada Controller Page, sehingga semua link pada navigasi header dapat menampilkan tampilan dengan layout yang sama.

- Halaman About
  ![Gambar 9](screenshots/9.png)

- Halaman Contact
  ![Gambar 10](screenshots/10.png)

- Halaman FAQ
  ![Gambar 11](screenshots/11.png)

- Halaman Terms of Service
  ![Gambar 12](screenshots/12.png)

- Modifikasi file page.php
  ![Gambar 13](screenshots/13.png)

## Hasil Akhir Praktikum 1

![Gambar 14](screenshots/14.png)

# Praktikum 2: Framework Lanjutan (CRUD)

## Langkah-langkah Praktikum

### 1. Membuat Database

- Membuat database lab_ci4 dan tabel artikel
  ![Gambar 1](screenshots/praktikum2/1.png)

### 2. Konfigurasi Koneksi Database

- Mengkonfigurasi file .env
  ![Gambar 2](screenshots/praktikum2/2.png)

### 3. Membuat Model

- Membuat file ArtikelModel.php
  ![Gambar 3](screenshots/praktikum2/3.png)

### 4. Membuat Controller

- Membuat file Artikel.php
  ![Gambar 4](screenshots/praktikum2/4.png)

### 5. Membuat View

- Membuat file index.php di folder artikel
  ![Gambar 5](screenshots/praktikum2/5.png)

### 6. Menambahkan Data Artikel

- Menambahkan data artikel melalui SQL
  ![Gambar 6](screenshots/praktikum2/6.png)

### 7. Membuat Tampilan Detail Artikel, Membuat Routing untuk artikel detail

- Membuat method view() di index.php dan file detail.php
  ![Gambar 71](screenshots/praktikum2/71.png)
  ![Gambar 72](screenshots/praktikum2/72.png)
  ![Gambar 73](screenshots/praktikum2/73.png)

### 8. Membuat Menu Admin

- Membuat method admin_index() dan file admin_index.php
  ![Gambar 81](screenshots/praktikum2/81.png)
  ![Gambar 82](screenshots/praktikum2/82.png)
  ![Gambar 83](screenshots/praktikum2/83.png)
  ![Gambar 84](screenshots/praktikum2/84.png)
  ![Gambar 85](screenshots/praktikum2/85.png)

### 9. Menambah Data Artikel

- Membuat method add() dan file form_add.php
  ![Gambar 91](screenshots/praktikum2/91.png)
  ![Gambar 92](screenshots/praktikum2/92.png)

### 10. Mengubah Data

- Membuat method edit() dan file form_edit.php
  ![Gambar 101](screenshots/praktikum2/101.png)
  ![Gambar 102](screenshots/praktikum2/102.png)

### 11. Menghapus Data

- Membuat method delete()
  ![Gambar 11](screenshots/praktikum2/11.png)

## Improvisasi yang Dilakukan

1. Menambahkan CSS untuk Admin Panel
   ![Gambar 12](screenshots/praktikum2/css.png)
2. Menambahkan Fitur Upload Gambar
   ![Gambar 13](screenshots/praktikum2/fitur1.png)
3. Menambahkan Fitur Pencarian Artikel
   ![Gambar 14](screenshots/praktikum2/fitur2.png)

## Hasil akhir Praktikum 2

![Gambar 15](screenshots/praktikum2/ss1.png)
![Gambar 16](screenshots/praktikum2/ss2.png)
![Gambar 17](screenshots/praktikum2/ss3.png)

# Praktikum 3: View Layout dan View Cell

## Langkah-langkah Praktikum

### 1. Membuat Layout Utama

- Membuat folder layout dan file main.php
  ![Gambar 1](screenshots/praktikum3/1.png)

### 2. Modifikasi File View

- Mengubah file home.php, about.php, contact.php, index.php, detail.php untuk menggunakan layout baru
  ![Gambar 21](screenshots/praktikum3/21.png)
  ![Gambar 22](screenshots/praktikum3/22.png)
  ![Gambar 23](screenshots/praktikum3/23.png)
  ![Gambar 24](screenshots/praktikum3/24.png)
  ![Gambar 25](screenshots/praktikum3/25.png)

### 3. Menambahkan Field Tanggal pada Database

- Menambahkan kolom created_at pada tabel artikel
  ![Gambar 3](screenshots/praktikum3/3.png)

### 4. Membuat Class View Cell

- Membuat folder Cells dan file ArtikelTerkini.php
  ![Gambar 4](screenshots/praktikum3/4.png)

### 5. Membuat View untuk View Cell

- Membuat folder components dan file artikel_terkini.php
  ![Gambar 5](screenshots/praktikum3/5.png)

### 6. Improvisasi - Menambahkan Kategori pada Artikel

- Menambahkan kolom kategori dan mengimplementasikan filter berdasarkan kategori
  ![Gambar 61](screenshots/praktikum3/61.png)
  ![Gambar 62](screenshots/praktikum3/62.png)
  ![Gambar 63](screenshots/praktikum3/63.png)
  ![Gambar 64](screenshots/praktikum3/64.png)
  ![Gambar 65](screenshots/praktikum3/65.png)

## Jawaban Pertanyaan

### 1. Apa manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi?

Manfaat utama dari penggunaan View Layout dalam pengembangan aplikasi adalah:

1. **Konsistensi Tampilan**: View Layout memastikan semua halaman memiliki struktur dan tampilan yang konsisten.
2. **Pemisahan Konten dan Layout**: Memisahkan konten spesifik halaman dari struktur layout umum, sehingga kode lebih terorganisir.
3. **Penggunaan Kembali Kode (Reusability)**: Layout yang sama dapat digunakan oleh banyak halaman tanpa perlu menulis ulang kode.
4. **Pemeliharaan yang Lebih Mudah**: Perubahan pada layout cukup dilakukan di satu tempat dan akan berlaku untuk semua halaman yang menggunakannya.
5. **Pengembangan yang Lebih Cepat**: Pengembang dapat fokus pada konten halaman tanpa perlu mengulang-ulang kode layout.

### 2. Jelaskan perbedaan antara View Cell dan View biasa.

Perbedaan antara View Cell dan View biasa:

1. **Fungsi dan Tujuan**:

- **View Biasa**: Digunakan untuk menampilkan halaman lengkap atau bagian dari halaman.
- **View Cell**: Digunakan untuk membuat komponen UI yang dapat digunakan ulang dan bersifat modular.

2. **Cara Pemanggilan**:

- **View Biasa**: Dipanggil dengan `return view('nama_view', $data)` atau `echo view('nama_view', $data)`.
- **View Cell**: Dipanggil dengan `<?= view_cell('Namespace\\Class::method', $params) ?>`.

3. **Logika Bisnis**:

- **View Biasa**: Biasanya tidak memiliki logika bisnis, hanya menerima data dari controller.
- **View Cell**: Dapat memiliki logika bisnis sendiri, seperti mengambil data dari database.

4. **Penggunaan Kembali**:

- **View Biasa**: Dapat digunakan kembali dengan include/extend, tetapi kurang fleksibel.
- **View Cell**: Dirancang khusus untuk komponen yang digunakan berulang kali di berbagai halaman.

5. **Isolasi**:

- **View Biasa**: Berbagi konteks dengan view yang memanggilnya.
- **View Cell**: Memiliki konteks tersendiri, terisolasi dari view yang memanggilnya.

### 3. Ubah View Cell agar hanya menampilkan post dengan kategori tertentu.

- Modifikasi method `render()` di class `ArtikelTerkini` untuk menerima parameter kategori:
  ![Gambar 331](screenshots/praktikum3/331.png)
- Panggil View Cell dengan parameter kategori di layout:
  ![Gambar 332](screenshots/praktikum3/332.png)

## Hasil akhir Praktikum 3

![Gambar ss3](screenshots/praktikum3/ss3.png)

# Praktikum 4: Framework Lanjutan (Modul Login)

## Langkah-langkah Praktikum

### 1. Membuat Tabel User

- Membuat tabel user di database lab_ci4
  ![Gambar 1](screenshots/praktikum4/1.png)

### 2. Membuat Model User

- Membuat file UserModel.php
  ![Gambar 2](screenshots/praktikum4/2.png)

### 3. Membuat Controller User

- Membuat file User.php dengan method login dan logout
  ![Gambar 3](screenshots/praktikum4/3.png)

### 4. Membuat View Login

- Membuat file login.php di folder user
  ![Gambar 41](screenshots/praktikum4/41.png)
  ![Gambar 42](screenshots/praktikum4/42.png)

### 5. Membuat Database Seeder

- Membuat UserSeeder untuk data dummy
  ![Gambar 51](screenshots/praktikum4/51.png)
  ![Gambar 52](screenshots/praktikum4/52.png)
  ![Gambar 53](screenshots/praktikum4/53.png)

### 6. Menambahkan Auth Filter

- Membuat file Auth.php di folder Filters
  ![Gambar 61](screenshots/praktikum4/61.png)
  ![Gambar 62](screenshots/praktikum4/62.png)
  ![Gambar 63](screenshots/praktikum4/63.png)

### 7. Menambahkan Fungsi Logout

- Menambahkan tombol logout
  ![Gambar 7](screenshots/praktikum4/71.png)

## Improvisasi yang Dilakukan

1. Menambahkan Halaman Register
   ![Gambar 111](screenshots/praktikum4/im11.png)
   ![Gambar 112](screenshots/praktikum4/im12.png)
   ![Gambar 113](screenshots/praktikum4/im13.png)

2. Menambahkan Dashboard Admin
   ![Gambar 221](screenshots/praktikum4/im21.png)
   ![Gambar 222](screenshots/praktikum4/im22.png)
   ![Gambar 223](screenshots/praktikum4/im23.png)
   ![Gambar 224](screenshots/praktikum4/im24.png)

3. Memperbaiki tampilan dengan CSS
   ![Gambar 31](screenshots/praktikum4/im31.png)

## Hasil Akhir Praktikum 4

![Gambar ss1](screenshots/praktikum4/ss1.png)
![Gambar ss2](screenshots/praktikum4/ss2.png)
![Gambar ss3](screenshots/praktikum4/ss3.png)

# Praktikum 5: Pagination dan Pencarian

## Langkah-langkah Praktikum

### 1. Membuat Pagination

#### Modifikasi Controller Artikel dan View admin_index.php

![Gambar 1](screenshots/praktikum5/1.png)
![Gambar 2](screenshots/praktikum5/2.png)
![Gambar 3](screenshots/praktikum5/3.png)

### 2. Membuat Pencarian

#### Modifikasi method `admin_index` untuk menambahkan fitur pencarian dan link Pagination, lalu tambahkan form pencarian di View.

![Gambar 4](screenshots/praktikum5/4.png)
![Gambar 5](screenshots/praktikum5/5.png)
![Gambar 6](screenshots/praktikum5/6.png)
![Gambar 7](screenshots/praktikum5/7.png)

### 3. Melakukan Improvisasi yaitu : menambahkan fitur pencarian berdasarkan kategori, dan menampilkan jumlah data yang ditemukan.

![Gambar 8](screenshots/praktikum5/8.png)
![Gambar 9](screenshots/praktikum5/9.png)

### Hasil Akhir Praktikum 5.

![Gambar ss](screenshots/praktikum5/ss.png)

# Praktikum 6: Upload File Gambar

## Langkah-langkah Praktikum

### 1. Modifikasi Method add() pada Controller Artikel

#### Modifikasi Controller Artikel

![Gambar 1](screenshots/praktikum6/1.png)

### 2. Modifikasi file form_add.php

#### Menambahkan field input dan sesuaikan tag form dengan menambahkan ecrypt type.

![Gambar 2](screenshots/praktikum6/2.png)

### 3. Ujicoba file upload dengan mengakses menu tambah artikel.

![Gambar 3](screenshots/praktikum6/31.png)
![Gambar 4](screenshots/praktikum6/32.png)

### Hasil Akhir Praktikum 6.

![Gambar ss](screenshots/praktikum6/ss6.png)

# Praktikum 7: Relasi Tabel dan Query Builder

## Tujuan

- Memahami konsep relasi antar tabel dalam database
- Mengimplementasikan relasi One-to-Many
- Melakukan query dengan join tabel menggunakan Query Builder
- Menampilkan data dari tabel yang berelasi

## Langkah-langkah Praktikum

### 1. Membuat Tabel Kategori

Saya membuat tabel kategori dengan struktur:

- id_kategori (INT, PRIMARY KEY, AUTO_INCREMENT)
- nama_kategori (VARCHAR 100)
- slug_kategori (VARCHAR 100)

```sql
CREATE TABLE kategori (
    id_kategori INT(11) AUTO_INCREMENT,
    nama_kategori VARCHAR(100) NOT NULL,
    slug_kategori VARCHAR(100),
    PRIMARY KEY (id_kategori)
);
```

![Gambar 1](screenshots/praktikum7/1.png)

### 2. Menambahkan Foreign Key ke Tabel Artikel

Saya menambahkan kolom id_kategori ke tabel artikel dan membuat foreign key constraint:

```sql
ALTER TABLE artikel
ADD COLUMN id_kategori INT(11),
ADD CONSTRAINT fk_kategori_artikel
FOREIGN KEY (id_kategori) REFERENCES kategori(id_kategori);
```

![Gambar 1](screenshots/praktikum7/2.png)
![Gambar 1](screenshots/praktikum7/3.png)
![Gambar 1](screenshots/praktikum7/4.png)

### 3. Membuat Model Kategori

Saya membuat KategoriModel.php untuk mengelola data kategori:

![Gambar](screenshots/praktikum7/5.png)

### 4. Memodifikasi Model Artikel

Saya menambahkan method getArtikelDenganKategori() untuk melakukan JOIN:

![Gambar](screenshots/praktikum7/6.png)

### 5. Memodifikasi Controller Artikel

Saya mengupdate controller untuk menggunakan relasi tabel:

![Gambar](screenshots/praktikum7/7.png)

### 6. Memodifikasi View

Saya mengupdate semua view untuk menampilkan kategori:

![Gambar](screenshots/praktikum7/8.png)
![Gambar](screenshots/praktikum7/9.png)
![Gambar](screenshots/praktikum7/10.png)
![Gambar](screenshots/praktikum7/11.png)
![Gambar](screenshots/praktikum7/12.png)
![Gambar](screenshots/praktikum7/13.png)
![Gambar](screenshots/praktikum7/14.png)

### 7. Testing

Hasil testing menunjukkan semua fitur berjalan dengan baik:
![Gambar](screenshots/praktikum7/15.png)
![Gambar](screenshots/praktikum7/16.png)
![Gambar](screenshots/praktikum7/17.png)
![Gambar](screenshots/praktikum7/18.png)
![Gambar](screenshots/praktikum7/19.png)

## Pertanyaan dan Tugas

### 1. Modifikasi tampilan detail artikel

Saya telah memodifikasi detail.php untuk menampilkan nama kategori artikel.

### 2. Menampilkan daftar kategori di halaman depan

Saya menambahkan widget kategori di sidebar.

### 3. Fungsi menampilkan artikel berdasarkan kategori

Saya membuat method kategori() di controller dan view kategori.php.

### Hasil Praktikum 7

![Gambar](screenshots/praktikum7/ss.png)

# Praktikum 8: AJAX di CodeIgniter 4

## Langkah-langkah Praktikum

### 1. Menambahkan Pustaka jQuery

Saya menambahkan jQuery ke project dengan menyalin file jQuery ke folder `public/assets/js/`.

![Gambar](screenshots/praktikum8/1.png)

### 2. Membuat AJAX Controller

Saya membuat controller baru bernama `AjaxController.php` untuk menangani request AJAX.
![Gambar](screenshots/praktikum8/2.png)

### 3. Menambahkan Routes

Saya menambahkan routes untuk AJAX di `app/Config/Routes.php`.
![Gambar](screenshots/praktikum8/3.png)

### 4. Membuat View

Saya membuat view untuk menampilkan data artikel dengan AJAX.
![Gambar](screenshots/praktikum8/4.png)
![Gambar](screenshots/praktikum8/5.png)

### 5. Testing

Hasil testing menunjukkan semua fitur AJAX berjalan dengan baik

### 6. Improvisasi

Saya menambahkan fitur pencarian dan filter kategori dengan AJAX

## Pertanyaan dan Tugas

### 1. Menambahkan Fungsi Tambah dan Ubah Data

Saya telah menambahkan fungsi untuk menambah dan mengubah data artikel menggunakan AJAX.

### 2. Improvisasi

Saya menambahkan fitur pencarian dan filter kategori untuk meningkatkan fungsionalitas aplikasi.

## Hasil Praktikum 8

![Gambar](screenshots/praktikum8/ss.png)

# Praktikum 9: Implementasi AJAX Pagination dan Search

## Langkah-langkah Praktikum

### 1. Persiapan Data

Saya menambahkan lebih banyak data artikel untuk testing pagination:

![Gambar](screenshots/praktikum9/1.png)

### 2. Modifikasi Controller Artikel

Saya mengupdate method admin_index() untuk mendukung AJAX request:

![Gambar](screenshots/praktikum9/2.png)

### 3. Modifikasi View admin_index.php

Saya mengubah view untuk menggunakan AJAX dengan fitur:

- Search real-time
- Filter kategori
- Pagination tanpa reload
- Sorting kolom

![Gambar](screenshots/praktikum9/3.png)

### 4. Testing Fitur

Hasil testing menunjukkan semua fitur AJAX berjalan dengan baik

## Pertanyaan dan Tugas

Saya mengimplementasikan sorting untuk kolom ID, Judul, dan Status.

## Hasil Praktikum 9

Praktikum ini berhasil mengimplementasikan AJAX pagination dan search yang meningkatkan user experience dengan:

- Tidak ada reload halaman
- Response yang cepat
- Interface yang responsif
- Fitur sorting dan export tambahan
  ![Gambar](screenshots/praktikum9/ss.png)

# Praktikum 10: API

## Langkah-langkah Praktikum

### 1. Persiapan

Menginstall postman, membuat database dan mengatur konfigurasinya

![Gambar](screenshots/praktikum10/1.png)

### 2. Membuat REST Controller

- Membuat file `Post.php` di `app/Controllers` untuk menangani operasi CRUD.
- Kode controller: (lihat file `Post.php`).
  ![Gambar](screenshots/praktikum10/2.png)

### 4. Membuat Routing

- Menambahkan rute di `app/Config/Routes.php`:
  ```php
  $routes->resource('post');
  ```
  ![Gambar](screenshots/praktikum10/3.png)
- Memeriksa rute dengan perintah:
  ```bash
  php spark routes
  ```
  ![Gambar](screenshots/praktikum10/4.png)

### 5. Pengujian dengan Postman

- **Menampilkan semua data (GET)**:
  - URL: `http://localhost:8080/post`
    ![Gambar](screenshots/praktikum10/5.png)
- **Menambahkan data (POST)**:
  - URL: `http://localhost:8080/post`
  - Body: `judul=Artikel Baru&isi=Ini adalah isi artikel baru`
    ![Gambar](screenshots/praktikum10/6.png)
- **Menampilkan data berdasarkan ID (GET)**:
  - URL: `http://localhost:8080/post/1`
    ![Gambar](screenshots/praktikum10/7.png)
- **Mengubah data (PUT)**:
  - URL: `http://localhost:8080/post/2`
  - Body: `judul=Artikel Diubah&isi=Ini adalah isi artikel yang diubah`
    ![Gambar](screenshots/praktikum10/8.png)
- **Menghapus data (DELETE)**:
  - URL: `http://localhost:8080/post/2`
    ![Gambar](screenshots/praktikum10/9.png)

## Kesimpulan

Praktikum ini berhasil mengimplementasikan REST API dengan CodeIgniter 4 untuk operasi CRUD. API diuji menggunakan Postman, dan semua fungsi (GET, POST, PUT, DELETE) berjalan dengan baik.
