# Todo MVC Project

## Deskripsi
Proyek ini adalah aplikasi Todo MVC sederhana yang memungkinkan pengguna untuk mengelola daftar tugas mereka. Aplikasi ini menggunakan arsitektur MVC (Model-View-Controller) untuk memisahkan logika aplikasi, data, dan antarmuka pengguna.

## Fitur
- Tambah, lihat, ubah, dan hapus tugas
- API RESTful untuk interaksi dengan aplikasi
- Struktur kode yang rapi dan terorganisir

## Persyaratan
- PHP 7.4 atau lebih baru
- Server web (misalnya Apache, Nginx)
- Database MySQL

## Petunjuk Pemasangan

1. **Clone Repository**
    git clone https://github.com/username/Todo_mvc-main.git
    cd Todo_mvc-main

2. **Konfigurasi Basis Data**
    - Buat database baru di MySQL.
    - Impor skema basis data menggunakan file `script.sql`
    - Konfigurasi koneksi basis data di `config/database.php`.

3. **Mulai Server Web**
    - Mulai atau restart server web Anda.

## Struktur Proyek
Todo_MVC
│
├── README.md

├── script.sql

├── api/

│ └── api.php

├── config/

│ └── database.php

├── controller/

│ └── TodoController.php

└── model/

└── TodoModel.php

## Contoh Penggunaan

### API Endpoint
1. **Mendapatkan Daftar Tugas**
    http://localhost/Todo1/app/api/api.php?action=view

3. **Menambahkan Tugas Baru**
    http://localhost/Todo1/app/api/api.php?action=add&todo=menambahkan+topik&todo_data=menambahkan+deskripsi

4. **Mengubah Tugas**
    http://localhost/Todo1/app/api/api.php?action=update$id=1&topic=topik+baru&todo=deskripsi+baru

5. **Menghapus Tugas**
    http://localhost/Todo1/app/api/api.php?action=delete&id=1

## Refleksi Diri Terhadap Proyek

### Pendahuluan
Proyek ini dikembangkan untuk membuat aplikasi pengelolaan tugas sederhana dengan menggunakan pola desain MVC. Dalam proses pengembangan, saya menghadapi beberapa tantangan yang signifikan yang membantu saya tumbuh sebagai pengembang.

### Tantangan dan Kesulitan yang Dihadapi

1. **Struktur Proyek dan Pemahaman MVC:**
   - **Tantangan:** Memahami dan mengimplementasikan pola desain MVC dengan benar.
   - **Cara Mengatasi:** Mempelajari dokumentasi dan tutorial online serta menganalisis contoh proyek lain.

2. **Interaksi dengan Basis Data:**
   - **Tantangan:** Mengatur koneksi dan interaksi yang aman dan efisien dengan basis data.
   - **Cara Mengatasi:** Menggunakan library dan framework yang ada serta memastikan penggunaan prepared statements.

3. **Pembuatan API:**
   - **Tantangan:** Membuat API yang efisien dan mudah digunakan.
   - **Cara Mengatasi:** Merancang API dengan jelas dan mengujinya menggunakan alat seperti Postman.

4. **Pengelolaan Kesalahan dan Debugging:**
   - **Tantangan:** Menemukan dan memperbaiki bug dalam kode.
   - **Cara Mengatasi:** Menggunakan log dan pesan kesalahan yang jelas serta alat debugging yang disediakan oleh lingkungan pengembangan.

### Kesimpulan
Proyek Todo MVC ini memberikan banyak pengalaman berharga dan membantu saya meningkatkan keterampilan teknis saya. Tantangan yang dihadapi selama pengembangan membantu saya tumbuh sebagai pengembang dan siap menghadapi proyek yang lebih kompleks di masa depan.
