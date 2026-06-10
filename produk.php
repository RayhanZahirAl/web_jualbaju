<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Produk - Von Dutch</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include_once 'header.php'
    ?>
    <!-- ═══════════════════════════════════════════
     PAGE: PRODUCT DETAIL
═══════════════════════════════════════════ -->
    <div class="page active" id="page-detail">
        <div class="detail-wrap">
            <div class="breadcrumb" id="detailBreadcrumb"></div>
            <div class="detail-layout row g-4 align-items-start">
                <div class="col-12 col-md-6">
                    <div class="detail-images">
                        <div class="main-img"><img id="detailMainImg" src="" alt="" /></div>
                        <div class="thumb-row" id="detailThumbs"></div>
                    </div>
                </div>
                <div class="col-12 col-md-6">
                    <div class="detail-info">
                        <div class="detail-brand">Von Dutch</div>
                        <h1 class="detail-name" id="detailName"></h1>
                        <div id="detailPriceOrig"></div>
                        <div class="detail-price" id="detailPrice"></div>
                        <div class="detail-badge-row" id="detailBadges"></div>
                        <hr class="divider" />
                        <div id="sizeSection">
                            <div class="detail-label">Pilih Ukuran</div>
                            <div class="size-row" id="sizeRow"></div>
                        </div>

                        <!-- qty & cart removed -->
                        <div class="detail-accordion">
                            <div class="acc-item">
                                <div class="acc-head" onclick="toggleAcc(this)">Deskripsi Produk <span>+</span></div>
                                <div class="acc-body" id="detailDesc"></div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-head" onclick="toggleAcc(this)">Pengiriman & Retur <span>+</span></div>
                                <div class="acc-body">Pengiriman ke seluruh Indonesia via JNE, SiCepat, dan J&T. Free ongkir min. pembelian Rp 300.000. Retur dalam 7 hari setelah produk diterima (syarat berlaku).</div>
                            </div>
                            <div class="acc-item">
                                <div class="acc-head" onclick="toggleAcc(this)">Panduan Ukuran <span>+</span></div>
                                <div class="acc-body">S: Lingkar Dada 50cm · M: 52cm · L: 54cm · XL: 56cm · XXL: 58cm. Untuk trucker hat, ukuran bersifat free size dengan adjuster belakang.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Related Products -->
            <div style="margin-top:60px">
                <div class="section-head">
                    <h2>Produk Serupa</h2>
                </div>
                <div class="product-grid row g-3" id="relatedGrid"></div>
            </div>
        </div>
    </div>

    <script src="js/database.js"></script>
    <script src="js/script.js"></script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>