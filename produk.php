<!DOCTYPE html> <!-- Standar dokumen web -->
<html lang="en"> <!-- Bahasa utama konten -->

<head>
    <meta charset="UTF-8"> <!-- Penanganan karakter teks -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Standar responsif layar -->
    <title>Detail Produk - Von Dutch</title> <!-- Nama tab halaman -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet"> <!-- Font eksternal -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Library CSS Bootstrap -->
    <link rel="stylesheet" href="css/index.css"> <!-- CSS buatan sendiri -->
</head>

<body>
    <?php
    include_once 'header.php' // Mengambil navigasi header
    ?>

    <!-- Halaman Detail Produk Tunggal -->
    <div class="page active" id="page-detail"> <!-- Kontainer utama detail -->
        <div class="detail-wrap"> <!-- Pembungkus konten dengan padding -->
            <div class="breadcrumb" id="detailBreadcrumb"></div> <!-- Navigasi petunjuk jalan (Home / Kategori / Nama Produk) -->
            <div class="detail-layout row g-4 align-items-start"> <!-- Grid Bootstrap: Baris utama detail -->
                <div class="col-12 col-md-6"> <!-- Bagian Kiri: Gambar Produk -->
                    <div class="detail-images"> <!-- Kontainer gambar -->
                        <div class="main-img"><img id="detailMainImg" src="" alt="" /></div> <!-- Placeholder Gambar Utama -->
                        <div class="thumb-row" id="detailThumbs"></div> <!-- Tempat barisan gambar kecil (thumbnail) -->
                    </div>
                </div>
                <div class="col-12 col-md-6"> <!-- Bagian Kanan: Info Harga & Deskripsi -->
                    <div class="detail-info"> <!-- Kontainer teks informasi -->
                        <div class="detail-brand">Von Dutch</div> <!-- Label Merk tetap -->
                        <h1 class="detail-name" id="detailName"></h1> <!-- Placeholder Nama Produk (diisi via JS) -->
                        <div id="detailPriceOrig"></div> <!-- Placeholder Harga Coret (jika diskon) -->
                        <div class="detail-price" id="detailPrice"></div> <!-- Placeholder Harga Aktif -->
                        <div class="detail-badge-row" id="detailBadges"></div> <!-- Placeholder Badge (New/Sale) -->
                        <hr class="divider" /> <!-- Garis pemisah horizontal -->
                        <div id="sizeSection"> <!-- Bagian pemilihan ukuran -->
                            <div class="detail-label">Pilih Ukuran</div> <!-- Teks instruksi pilih ukuran -->
                            <div class="size-row" id="sizeRow"></div> <!-- Tombol-tombol ukuran (diisi via JS) -->
                        </div>

                        <!-- Bagian Detail Lipat (Accordion) -->
                        <div class="detail-accordion">
                            <div class="acc-item"> <!-- Item 1: Deskripsi -->
                                <div class="acc-head" onclick="toggleAcc(this)">Deskripsi Produk <span>+</span></div>
                                <div class="acc-body" id="detailDesc"></div> <!-- Isi deskripsi otomatis -->
                            </div>
                            <div class="acc-item"> <!-- Item 2: Pengiriman (Teks Tetap) -->
                                <div class="acc-head" onclick="toggleAcc(this)">Pengiriman & Retur <span>+</span></div>
                                <div class="acc-body">Pengiriman ke seluruh Indonesia via JNE, SiCepat, dan J&T. Free ongkir min. pembelian Rp 300.000. Retur dalam 7 hari setelah produk diterima (syarat berlaku).</div>
                            </div>
                            <div class="acc-item"> <!-- Item 3: Panduan Size (Teks Tetap) -->
                                <div class="acc-head" onclick="toggleAcc(this)">Panduan Ukuran <span>+</span></div>
                                <div class="acc-body">S: Lingkar Dada 50cm · M: 52cm · L: 54cm · XL: 56cm · XXL: 58cm. Untuk trucker hat, ukuran bersifat free size dengan adjuster belakang.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Bagian Produk Terkait (Related) -->
            <div style="margin-top:60px">
                <div class="section-head">
                    <h2>Produk Serupa</h2> <!-- Judul rekomendasi -->
                </div>
                <!-- Grid untuk menampilkan produk lain dalam kategori yang sama -->
                <div class="product-grid row g-3" id="relatedGrid"></div>
            </div>
        </div>
    </div>

    <script src="js/database.js"></script> <!-- Gudang data -->
    <script src="js/script.js"></script> <!-- Fungsi openDetail() dan navigasi -->
    <?php
    include_once 'footer.php'; // Mengambil navigasi bawah
    ?>
</body>

</html>