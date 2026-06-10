<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:ital,wght@0,300;0,400;0,600;0,700;1,400&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include_once 'header.php'
    ?>

    <!-- ═══════════════════════════════════════════
     PAGE: HOME
═══════════════════════════════════════════ -->
    <div class="page active" id="page-home">

        <!-- Hero Slider -->
        <div class="hero" id="heroSlider">
            <div class="hero-slide active">
                <img src="img/home1.jpg" alt="New Collection" />
                <div class="hero-text">
                    <h2>NEW COLLECTION 2025</h2>
                    <p>The Official Store of Von Dutch Indonesia — Let's be the part of our journey!</p>
                    <button class="btn-white" onclick="nav('shop')">Shop Now</button>
                </div>
            </div>
            <div class="hero-slide">
                <img src="img/home2.jpg" alt="Trucker Hats" />
                <div class="hero-text">
                    <h2>ICONIC TRUCKER HATS</h2>
                    <p>Gaya ikonik Von Dutch yang tak lekang waktu — sekarang tersedia di Indonesia</p>
                    <button class="btn-white" onclick="nav('shop')">Lihat Koleksi</button>
                </div>
            </div>
            <div class="hero-slide">
                <img src="img/home3.png" alt="Sale" />
                <div class="hero-text">
                    <h2>SALE UP TO 40%</h2>
                    <p>Penawaran spesial stok terbatas — jangan sampai kehabisan!</p>
                    <button class="btn-white" onclick="nav('sale')">Lihat Sale</button>
                </div>
            </div>
            <div class="hero-dots" id="heroDots"></div>
        </div>

        <!-- Categories -->
        <div class="section">
            <div class="section-head">
                <h2>Kategori</h2>
            </div>
            <div class="cat-row">
                <div class="cat-chip active" onclick="goShop('Semua')">Semua</div>
                <div class="cat-chip" onclick="goShop('Trucker Hat')">Trucker Hats</div>
                <div class="cat-chip" onclick="goShop('Clothing')">Clothing</div>
                <div class="cat-chip" onclick="goShop('Bags')">Bags</div>
                <div class="cat-chip" onclick="goShop('Accessories')">Accessories</div>
                <div class="cat-chip" onclick="goShop('Women')">Women</div>
                <div class="cat-chip" onclick="goShop('Men')">Men</div>
            </div>
        </div>

        <!-- Category Banners -->
        <div class="section" style="padding-top:0">
            <div class="row g-3">
                <div class="col-12 col-sm-6">
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

        <!-- Product Table Section -->
        <div class="section">
            <div class="section-head">
                <h2>Ringkasan Produk</h2>
                <div class="see-all" onclick="nav('shop')">Lihat Katalog Lengkap</div>
            </div>
            <div class="table-responsive">
                <table class="table table-hover align-middle shadow-sm border">
                    <thead class="table-light">
                        <tr>
                            <th scope="col">Nomor</th>
                            <th scope="col">Nama Produk</th>
                            <th scope="col">Kategori</th>
                            <th scope="col">Harga</th>
                            <th scope="col" class="text-center">Aksi</th>
                        </tr>
                    </thead>
                    <tbody id="productTableBody">
                        <!-- Data dimuat melalui script.js -->
                    </tbody>
                </table>
            </div>
        </div>

    </div>

    <!-- ══ FOOTER ══ -->

    <div class="toast" id="toast"></div>
    <button class="btt" id="btt" onclick="window.scrollTo({top:0,behavior:'smooth'})">↑</button>

    <script src="js/database.js"></script>
    <script src="js/script.js"></script>

    <?php
    include_once 'footer.php';
    ?>
</body>

</html>