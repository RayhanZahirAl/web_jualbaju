<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sale - Von Dutch</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include_once 'header.php'
    ?>
    <!-- ═══════════════════════════════════════════
     PAGE: SALE
═══════════════════════════════════════════ -->
    <div class="page active" id="page-sale">
        <div class="sale-hero">
            <h1>SALE</h1>
            <p>Diskon hingga 40% — Stok terbatas, buruan!</p>
        </div>
        <div class="shop-wrap">
            <div class="product-grid row g-3" id="saleGrid"></div>
        </div>
    </div>

    <script src="js/database.js"></script>
    <script src="js/script.js"></script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>