<html>
<body>
    <h1>Daftar Produk</h1>
    <h2>Kategori: {{ $category }}</h2>
    
    <p>Berikut adalah barang yang tersedia di kategori ini:</p>
    <ul>
        @foreach ($products as $item)
            <li>{{ $item }}</li>
        @endforeach
    </ul>
    
    <br>
    <a href="{{ url('/') }}">Kembali ke Home</a>
</body>
</html>