<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

## Tentang Proyek

Proyek ini adalah sebuah aplikasi **e-commerce** yang dikembangkan menggunakan **Laravel** sebagai framework backend. Aplikasi ini mendukung berbagai fitur penting dalam pengelolaan toko online, seperti manajemen produk, kategori, pengguna, dan transaksi pembelian. Sistem ini juga dilengkapi dengan autentikasi pengguna yang memiliki peran berbeda, yaitu **Superadmin**, **Admin**, dan **Users**.

### Fitur Utama

1. **Manajemen Produk**:
   - Superadmin dan Admin dapat menambah, mengubah, dan menghapus produk.
   - Produk dapat dikelompokkan berdasarkan kategori.

2. **Manajemen Kategori**:
   - Fitur ini memungkinkan Admin untuk mengelola kategori produk, termasuk penambahan dan penghapusan kategori.

3. **Autentikasi Multi-Level**:
   - **Superadmin**: Memiliki hak penuh untuk mengelola semua aspek aplikasi, termasuk manajemen admin dan pengguna.
   - **Admin**: Bertanggung jawab untuk mengelola produk, kategori, dan pesanan pengguna.
   - **Users**: Pengguna umum yang dapat melakukan pendaftaran, melihat produk, menambahkan produk ke keranjang, dan melakukan transaksi.

4. **Keranjang Belanja dan Checkout**:
   - Pengguna dapat menambahkan produk ke keranjang belanja, memeriksa total harga, dan melanjutkan ke proses pembayaran.

5. **Pembayaran Online**:
   - Integrasi dengan payment gateway untuk memproses transaksi secara online, memberikan kemudahan kepada pengguna untuk berbelanja.

6. **Laporan Penjualan**:
   - Superadmin dapat memantau laporan penjualan yang mencakup transaksi pengguna dan performa produk.

### Teknologi yang Digunakan

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL
- **Autentikasi**: Laravel Auth
- **API**: Laravel API untuk mengelola data secara real-time
- **Payment Gateway**: Integrasi dengan gateway pembayaran (seperti Midtrans atau Stripe)

### Instalasi dan Pengaturan

Untuk menjalankan aplikasi ini, ikuti langkah-langkah berikut:


