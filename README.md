## 01_Struktur/Hirarki Folder
project-website-sistem-pendaftaran-beasiswa/
|-- app/
|-- bootstrap/
|-- config/
|-- database/
|-- public/
|   |-- assets/
|       |-- css/
|       |   |-- style.css
|       |-- images/
|       |-- js/
|           |-- main.js
|-- resources/
|   |-- views/
|       |-- home.blade.php
|       |-- daftar.blade.php
|       |-- hasil.blade.php
|-- routes/
|-- .env
|-- .gitignore
|-- artisan
|-- composer.json
|-- database.sqlite
|-- readme.md

## 02_keterangan
* app/, bootstrap/, config/, database/: Struktur inti dari aplikasi Laravel.
* public/assets/: Folder ini berisi semua aset yang diperlukan untuk website, seperti stylesheet, gambar, dan script JavaScript.
    - css/: Menyimpan file-file stylesheet, termasuk file style.css yang digunakan untuk styling website.
    - images/: Tempat untuk menyimpan semua gambar yang digunakan pada halaman website.
    - js/: Berisi file JavaScript, termasuk main.js yang digunakan untuk interaktivitas pada website.
* resources/views/: Folder ini berisi file-file blade yang digunakan untuk menghasilkan tampilan HTML pada website.
    - home.blade.php: File blade untuk halaman utama (home) yang berisi informasi singkat tentang sistem pendaftaran beasiswa.
    - daftar.blade.php: File blade untuk halaman pendaftaran beasiswa, tempat peserta mengisi formulir pendaftaran.
    - hasil.blade.php: File blade untuk halaman yang menampilkan daftar peserta beasiswa yang belum diverifikasi.
* routes/: Folder ini berisi file-file yang mendefinisikan rute atau URL pada aplikasi Laravel.
* .env: Berkas konfigurasi untuk pengaturan lingkungan aplikasi Laravel.
* .gitignore: Berkas ini digunakan untuk mengabaikan file atau folder tertentu saat proses version control menggunakan Git.
* artisan: Alat baris perintah untuk menjalankan tugas-tugas yang berhubungan dengan proyek Laravel.
* composer.json: Berkas konfigurasi untuk Composer, alat manajemen paket PHP yang digunakan dalam Laravel.
* database.sqlite: Database SQLite untuk menyimpan data pendaftaran beasiswa.

## 03_Sumber Daya Pemrograman
* Laravel Framework: Framework PHP yang digunakan untuk membangun aplikasi web modern dan efisien.
* Blade Template Engine: Mesin template bawaan Laravel untuk membuat tampilan HTML.
* Eloquent ORM: Sistem manajemen basis data yang memungkinkan interaksi dengan database menggunakan bahasa PHP.
* Composer: Alat manajemen paket PHP untuk mengelola dependensi proyek.

========================================================================

Dibuat Oleh: Adnisa Sabina
Pada Tanggal: 20 Desember 2023

Sistem Pendaftaran Beasiswa 'MySkul'

Sistem ini dibuat menggunakan Laravel dengan struktur folder berikut:
- Folder app: Berisi file kelas PHP yang mendefinisikan model, controller, dan middleware aplikasi.
- Folder bootstrap: Berisi file yang memuat kerangka kerja dan mengkonfigurasi autoloading.
- Folder config: Berisi file yang menentukan konfigurasi aplikasi, seperti database, mail, cache, dll.
- Folder public: Berisi file yang dapat diakses secara publik, seperti index.php, favicon, css, js, dll.
- Folder resources: Berisi file yang digunakan sebagai sumber daya untuk membangun tampilan aplikasi, seperti blade, lang, sass, dll.
- Folder layouts pada resource : berisi file blade untuk membuat component yang reusable
- Folder routes: Berisi file yang mendefinisikan rute aplikasi, seperti web.php, api.php, dll.
- Folder tests: Berisi file yang digunakan untuk menguji aplikasi, seperti unit test, feature test, dll.
- Folder vendor: Berisi file yang dihasilkan oleh Composer, yang merupakan manajer dependensi PHP.
- Folder .git: Berisi file yang digunakan oleh Git, yang merupakan sistem kontrol versi.
- File .env.example: File contoh yang berisi variabel lingkungan aplikasi, yang harus disalin ke file .env dan disesuaikan.
- File .gitattributes: File yang menentukan atribut untuk jalur proyek dalam Git.
- File .gitignore: File yang menentukan file atau folder yang harus diabaikan oleh Git.
- File composer.json: File yang menentukan informasi dan dependensi proyek PHP.
- File package.json: File yang menentukan informasi dan dependensi proyek Node.js.
- File phpunit.xml: File yang menentukan konfigurasi untuk pengujian aplikasi dengan PHPUnit.
- File README.md: File ini, yang berisi penjelasan tentang proyek.
- File app.config.js: File yang menentukan konfigurasi untuk aplikasi, seperti nama, versi, dll
- library dan Framework yang dipasang :
    -Bootstrap
    -Jquery
    -Datatables
    -Chartjs