<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Semua Produk - Von Dutch</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include_once 'header.php'
    ?>
    <!-- ═══════════════════════════════════════════
     PAGE: SHOP
═══════════════════════════════════════════ -->
    <div class="page active" id="page-shop">
        <div class="shop-wrap">
            <div class="breadcrumb">
                <span onclick="nav('home')">Home</span>
                <span class="sep">/</span>
                <span class="current" id="shopBreadcrumb">Semua Produk</span>
            </div>

            <div class="shop-topbar">
                <div>
                    <div class="shop-title" id="shopPageTitle">Semua Produk</div>
                    <div class="shop-count" id="shopCount">0 produk</div>
                </div>
            </div>

            <div class="filter-tabs" id="filterTabs" style="margin-bottom:24px">
                <button class="filter-tab active" onclick="setFilter('Semua')">Semua</button>
                <button class="filter-tab" onclick="setFilter('Trucker Hat')">Trucker Hat</button>
                <button class="filter-tab" onclick="setFilter('Clothing')">Clothing</button>
                <button class="filter-tab" onclick="setFilter('Bags')">Bags</button>
                <button class="filter-tab" onclick="setFilter('Accessories')">Accessories</button>
                <button class="filter-tab" onclick="setFilter('Women')">Women</button>
                <button class="filter-tab" onclick="setFilter('Men')">Men</button>
            </div>

            <div class="product-grid row g-3" id="shopGrid"></div>
        </div>
    </div>

    <script src="js/database.js"></script>
    <script src="js/script.js"></script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>