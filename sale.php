<!DOCTYPE html> <!-- Deklarasi dokumen HTML5 -->
<html lang="en"> <!-- Pengaturan bahasa dokumen -->

<head>
    <meta charset="UTF-8"> <!-- Karakter set standar web -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Pengaturan responsif layar -->
    <title>Sale - Von Dutch</title> <!-- Judul halaman di tab browser -->
    <!-- Mengambil font Bebas Neue dan Source Serif dari Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Framework Bootstrap -->
    <link rel="stylesheet" href="css/index.css"> <!-- File styling kustom -->
</head>

<body>
    <?php
    include_once 'header.php' // Memasukkan navigasi atas
    ?>

    <!-- Bagian Halaman Sale -->
    <div class="page active" id="page-sale"> <!-- Kontainer utama halaman sale -->
        <div class="sale-hero"> <!-- Banner promo berwarna merah (lihat CSS) -->
            <h1>SALE</h1> <!-- Judul besar banner -->
            <p>Diskon hingga 40% — Stok terbatas, buruan!</p> <!-- Teks deskripsi promo -->
        </div>
        <div class="shop-wrap"> <!-- Pembungkus grid produk -->
            <!-- Tempat menampilkan produk diskon secara otomatis via JS -->
            <div class="product-grid row g-3" id="saleGrid"></div>
        </div>
    </div>

    <script src="js/database.js"></script> <!-- Memuat data produk -->
    <script src="js/script.js"></script> <!-- Memuat logika renderSale() -->
    <?php
    include_once 'footer.php'; // Memasukkan navigasi bawah
    ?>
</body>

</html>