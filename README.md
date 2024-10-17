
## Tentang Proyek

Proyek ini adalah sebuah aplikasi **e-commerce** yang dikembangkan menggunakan **Laravel** sebagai framework backend. Aplikasi ini mendukung berbagai fitur penting dalam pengelolaan toko online, seperti manajemen produk, kategori, pengguna, dan transaksi pembelian. Sistem ini juga dilengkapi dengan autentikasi pengguna yang memiliki peran berbeda, yaitu **Superadmin**, **Admin**, dan **Users**.

### Fitur Utama

1. **Manajemen Produk**:
   - Superadmin dan Admin dapat menambah, mengubah, dan menghapus produk.
   - Produk dapat dikelompokkan berdasarkan kategori.

2. **Manajemen Kategori**:
   - Fitur ini memungkinkan Admin untuk mengelola kategori produk, termasuk penambahan dan penghapusan kategori.

3. **Peran **Admin**:
   - Admin adalah pengguna yang memiliki hak istimewa untuk mengelola produk dan transaksi dalam toko online. Sebagai penjual, Admin memiliki beberapa fitur kunci, yaitu:
     - **Menambah Barang**: Admin dapat menambahkan produk baru ke dalam sistem, mengisi informasi seperti nama, deskripsi, harga, dan gambar produk.
     - **Mengedit Barang**: Admin dapat mengubah informasi produk yang sudah ada, termasuk melakukan pembaruan harga, deskripsi, dan gambar, untuk memastikan informasi yang ditampilkan selalu akurat dan terkini.
     - **Menghapus Barang**: Jika suatu produk tidak lagi tersedia atau tidak relevan, Admin dapat menghapus produk tersebut dari sistem.
     - **Menerima Pesanan**: Admin bertanggung jawab untuk menerima dan memproses pesanan dari pengguna. Setelah pesanan diterima, Admin dapat memperbarui status pesanan dan memastikan pengiriman produk kepada pelanggan.

4. **Peran **Superadmin**:
   - Superadmin adalah pengguna dengan hak akses tertinggi dalam aplikasi e-commerce ini. Beberapa fungsi utama yang dimiliki oleh Superadmin meliputi:
     - **Menghapus Semua Barang**: Superadmin dapat menghapus semua produk yang dijual di dalam sistem. Ini berguna untuk membersihkan daftar produk atau menghapus semua barang yang tidak lagi relevan.
     - **Menghapus Pengguna**: Superadmin memiliki kemampuan untuk menghapus pengguna dari sistem, termasuk Admin dan Users. Ini penting untuk mengelola akses dan memastikan keamanan aplikasi.
     - **Manajemen Admin**: Superadmin juga dapat mengelola akun Admin, termasuk menambah atau menghapus Admin lain sesuai kebutuhan.

5. **Autentikasi Multi-Level**:
   - **Superadmin**: Memiliki hak penuh untuk mengelola semua aspek aplikasi, termasuk manajemen admin dan pengguna.
   - **Admin**: Bertanggung jawab untuk mengelola produk, kategori, dan pesanan pengguna.
   - **Users**: Pengguna umum yang dapat melakukan pendaftaran, melihat produk, menambahkan produk ke keranjang, dan melakukan transaksi.

6. **Keranjang Belanja dan Checkout**:
   - Pengguna dapat menambahkan produk ke keranjang belanja, memeriksa total harga, dan melanjutkan ke proses pembayaran.

7. **Pembayaran Online**:
   - Integrasi dengan payment gateway untuk memproses transaksi secara online, memberikan kemudahan kepada pengguna untuk berbelanja.

8. **Laporan Penjualan**:
   - Superadmin dapat memantau laporan penjualan yang mencakup transaksi pengguna dan performa produk.

### Teknologi yang Digunakan

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templates, Tailwind CSS
- **Database**: MySQL
- **Autentikasi**: Laravel Auth
  **Livewire**: Seacrh barang
- **Payment Gateway**: Integrasi dengan gateway pembayaran (seperti Midtrans atau Stripe)


User Super Admin
email = azmi@gmail.com
pw = password

