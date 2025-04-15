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
