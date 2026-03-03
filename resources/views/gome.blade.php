<html>
<body>
    <h1>Selamat Datang di Aplikasi POS (Point of Sales)</h1>
    <p>Silakan pilih menu aplikasi di bawah ini:</p>

    <h3>Daftar Kategori Produk:</h3>
    <ul>
        <li><a href="{{ url('/category/food-beverage') }}">Kategori: Food & Beverage</a></li>
        <li><a href="{{ url('/category/beauty-health') }}">Kategori: Beauty & Health</a></li>
        <li><a href="{{ url('/category/home-care') }}">Kategori: Home Care</a></li>
        <li><a href="{{ url('/category/baby-kid') }}">Kategori: Baby & Kid</a></li>
    </ul>

    <h3>Menu Lainnya:</h3>
    <ul>
        <li><a href="{{ url('/user/123/name/Nawfal') }}">Profil Pengguna (Nawfal)</a></li>
        <li><a href="{{ url('/sales') }}">Halaman Transaksi Kasir</a></li>
    </ul>
</body>
</html>