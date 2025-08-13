# Website Penjualan Apotek Huda

Website Penjualan Apotek Huda adalah platform e-commerce yang dikembangkan untuk mempermudah pembelian produk kesehatan secara online, khususnya untuk Apotek Huda. Website ini dibangun dengan menggunakan metode Rapid Application Development (RAD) dan teknologi seperti Laravel, MySQL, dan Midtrans sebagai payment gateway untuk memfasilitasi transaksi online.

## Fitur Utama
- **Katalog Produk Lengkap**  
  Menyediakan berbagai produk kesehatan seperti obat-obatan, suplemen, dan alat kesehatan lainnya, dengan informasi produk yang lengkap dan terperinci.

- **Proses Pembayaran Mudah dan Aman**  
  Menggunakan Midtrans untuk sistem pembayaran yang mendukung berbagai metode pembayaran seperti kartu kredit, transfer bank, dan e-wallet.

- **User-Friendly Interface**  
  Desain antarmuka yang memudahkan pengguna dalam melakukan pencarian, pembelian produk, dan melacak pesanan.

- **Pengelolaan Data Admin**  
  Admin dapat mengelola produk, pesanan, dan voucher dengan mudah melalui dashboard yang disediakan.

- **Keamanan Terjamin**  
  Fitur keamanan dengan sistem login yang dilengkapi dengan autentikasi yang kuat, serta perlindungan data pribadi pengguna.

## Implementasi Skripsi
Website ini dikembangkan sebagai bagian dari skripsi untuk memenuhi syarat kelulusan dalam program studi Sistem Informasi di Universitas Gunadarma. Skripsi ini bertujuan untuk mengembangkan sistem penjualan berbasis website yang dapat mempermudah proses pembelian produk kesehatan dan mengelola transaksi secara efisien.

### Fitur-fitur yang Diimplementasikan:
- **Pengelolaan Produk**  
  Admin dapat menambah, mengubah, dan menghapus produk kesehatan yang dijual.

- **Pengelolaan Transaksi**  
  Pengguna dapat memilih produk, menambahkannya ke keranjang, dan melakukan checkout. Sistem mendukung berbagai metode pembayaran melalui Midtrans.

- **Dashboard Admin**  
  Memungkinkan admin untuk melihat dan mengelola status pesanan, voucher diskon, dan data pengguna.

## Teknologi yang Digunakan
- **HTML, CSS, JavaScript**  
  Untuk membangun antarmuka pengguna yang interaktif dan responsif.

- **PHP & Laravel Framework**  
  Digunakan untuk pengembangan backend dengan arsitektur MVC (Model-View-Controller).

- **MySQL & PhpMyAdmin**  
  Untuk penyimpanan data produk, pesanan, dan pengguna.

- **Midtrans Payment Gateway**  
  Untuk memfasilitasi transaksi pembayaran yang aman dan mudah.

## Cara Menjalankan
1. **Clone repository:**
   ```bash
   https://github.com/xsillery12/website_apotek_huda.git

2. **Install dependensi:**
   - Pastikan Anda telah menginstal Composer di sistem Anda.
   - Jalankan perintah berikut di direktori project:
   ```bash
   composer install

3. **Konfigurasi .env:**
   - Salin file .env.example menjadi .env.
   - Atur pengaturan database dan Midtrans di file .env.

4. **Migrasi database:**
   ```bash
   php artisan migrate

5. **Jalankan server lokal:**
   ```bash
   php artisan serve
