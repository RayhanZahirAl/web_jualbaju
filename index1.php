<!DOCTYPE html> <!-- Deklarasi tipe dokumen sebagai HTML5 -->
<html lang="en"> <!-- Tag pembuka HTML dengan pengaturan bahasa Inggris -->

<head>
    <meta charset="UTF-8"> <!-- Mengatur karakter encoding ke UTF-8 (standar web) -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Membuat tampilan responsif di HP -->
    <title>von dutch</title> <!-- Judul yang muncul di tab browser -->
    <link rel="preconnect" href="https://fonts.googleapis.com"> <!-- Optimasi loading font dari Google -->
    <!-- Memuat font Bebas Neue dan Source Serif 4 -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Framework CSS Bootstrap -->
    <link rel="stylesheet" href="css/index.css"> <!-- File CSS kustom buatan sendiri -->
</head>

<body>
    <?php
    include_once 'header.php' // Mengambil elemen navigasi atas dari file terpisah
    ?>

    <!-- Halaman Utama (Home) -->
    <div class="page active" id="page-home"> <!-- Div kontainer utama halaman Home -->

        <!-- Hero Slider: Bagian banner besar yang bisa bergeser -->
        <div class="hero" id="heroSlider">
            <div class="hero-slide active"> <!-- Slide pertama -->
                <img src="img/home1.jpg" alt="New Collection" /> <!-- Gambar banner -->
                <div class="hero-text"> <!-- Teks di atas gambar banner -->
                    <h2>NEW COLLECTION 2025</h2>
                    <p>The Official Store of Von Dutch Indonesia — Let's be the part of our journey!</p>
                    <button class="btn-white" onclick="nav('shop')">Shop Now</button> <!-- Tombol belanja -->
                </div>
            </div>
            <div class="hero-slide"> <!-- Slide kedua -->
                <img src="img/home2.jpg" alt="Trucker Hats" />
                <div class="hero-text">
                    <h2>ICONIC TRUCKER HATS</h2>
                    <p>Gaya ikonik Von Dutch yang tak lekang waktu — sekarang tersedia di Indonesia</p>
                    <button class="btn-white" onclick="nav('shop')">Lihat Koleksi</button>
                </div>
            </div>
            <div class="hero-slide"> <!-- Slide ketiga -->
                <img src="img/home3.png" alt="Sale" />
                <div class="hero-text">
                    <h2>SALE UP TO 40%</h2>
                    <p>Penawaran spesial stok terbatas — jangan sampai kehabisan!</p>
                    <button class="btn-white" onclick="nav('sale')">Lihat Sale</button>
                </div>
            </div>
            <div class="hero-dots" id="heroDots"></div> <!-- Tempat munculnya titik-titik navigasi slider -->
        </div>

        <!-- Bagian Pilihan Kategori -->
        <div class="section">
            <div class="section-head">
                <h2>Kategori</h2>
            </div>
            <div class="cat-row"> <!-- Baris tombol filter kategori cepat -->
                <div class="cat-chip active" onclick="goShop('Semua')">Semua</div>
                <div class="cat-chip" onclick="goShop('Trucker Hat')">Trucker Hats</div>
                <div class="cat-chip" onclick="goShop('Clothing')">Clothing</div>
                <div class="cat-chip" onclick="goShop('Bags')">Bags</div>
                <div class="cat-chip" onclick="goShop('Accessories')">Accessories</div>
                <div class="cat-chip" onclick="goShop('Women')">Women</div>
                <div class="cat-chip" onclick="goShop('Men')">Men</div>
            </div>
        </div>

        <!-- Banner Kategori: Gambar visual untuk masuk ke kategori tertentu -->
        <div class="section" style="padding-top:0">
            <div class="row g-3"> <!-- Grid Bootstrap dengan jarak antar kolom g-3 -->
                <div class="col-12 col-sm-6"> <!-- 1 kolom di HP, 2 kolom di Tablet ke atas -->
                    <div class="cat-banner" onclick="goShop('Trucker Hat')">
                        <img src="img/workshirt.jpg" alt="Trucker Hats" />
                        <div class="cat-banner-label">
                            <h3>WORKSHIRT</h3><span>48 Produk</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="cat-banner" onclick="goShop('Clothing')">
                        <img src="img/longsleev.jpg" alt="Clothing" />
                        <div class="cat-banner-label">
                            <h3>LONGSLEEV</h3><span>63 Produk</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="cat-banner" onclick="goShop('Bags')">
                        <img src="img/caps.jpg" alt="Bags" />
                        <div class="cat-banner-label">
                            <h3>TRUCKER CAPS</h3><span>27 Produk</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-6">
                    <div class="cat-banner" onclick="goShop('Accessories')">
                        <img src="img/TOTEBAG.webp" alt="Accessories" />
                        <div class="cat-banner-label">
                            <h3>ACCESSORIES</h3><span>35 Produk</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tabel Ringkasan Produk: Menampilkan daftar produk dalam bentuk tabel -->
        <div class="section">
            <div class="section-head">
                <h2>Ringkasan Produk</h2>
                <div class="see-all" onclick="nav('shop')">Lihat Katalog Lengkap</div> <!-- Link ke halaman shop -->
            </div>
            <div class="table-responsive"> <!-- Membuat tabel bisa di-scroll ke samping jika layar sempit -->
                <table class="table table-hover align-middle shadow-sm border">
                    <thead class="table-light"> <!-- Kepala Tabel -->
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="productTableBody">
                        <!-- Data baris tabel akan disuntikkan oleh fungsi renderHome() di script.js -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- Elemen Tambahan UI -->
    <div class="toast" id="toast"></div> <!-- Tempat munculnya notifikasi pop-up kecil -->
    <button class="btt" id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button> <!-- Tombol Kembali ke Atas -->

    <!-- Memuat file JavaScript -->
    <script src="js/database.js"></script> <!-- Gudang data produk -->
    <script src="js/script.js"></script> <!-- Logika interaksi website -->

    <?php
    include_once 'footer.php'; // Mengambil elemen kaki halaman
    ?>
</body>

</html>