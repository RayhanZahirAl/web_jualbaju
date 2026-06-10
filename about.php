<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tentang Kami - Von Dutch</title>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/index.css">
</head>

<body>
    <?php
    include_once 'header.php'
    ?>
    <!-- ═══════════════════════════════════════════
     PAGE: ABOUT
═══════════════════════════════════════════ -->
    <div class="page active" id="page-about">
        <div class="about-wrap">
            <div class="breadcrumb" style="padding-left:0">
                <span onclick="nav('home')">Home</span>
                <span class="sep">/</span>
                <span class="current">Tentang Kami</span>
            </div>
            <h1>Tentang Von Dutch Indonesia</h1>
            <div class="about-img"><img src="img/home3.png" alt="Von Dutch" /></div>

            <p>Selamat datang di toko resmi Von Dutch Indonesia — satu-satunya official store untuk brand ikonik Von Dutch di Indonesia. Kami hadir untuk membawa kamu lebih dekat dengan gaya streetwear legendaris yang telah menemani budaya pop dunia sejak tahun 1999.</p>

            <h3>Tentang Von Dutch</h3>
            <p>Von Dutch adalah merek fashion asal Amerika yang lahir dari semangat Kustom Kulture dan dipopulerkan oleh desainer ternama Christian Audigier di awal tahun 2000-an. Trucker hat ikonik Von Dutch menjadi simbol gaya yang dikenakan oleh Paris Hilton, Britney Spears, dan sederet selebriti dunia.</p>
            <p>Kini, Von Dutch kembali hadir dengan semangat baru — memadukan warisan streetwear autentik dengan estetika kontemporer yang relevan untuk generasi saat ini.</p>

            <div class="info-grid">
                <div class="info-box">
                    <div class="info-num">25+</div>
                    <div class="info-lbl">Tahun Berdiri</div>
                </div>
                <div class="info-box">
                    <div class="info-num">50K+</div>
                    <div class="info-lbl">Pelanggan</div>
                </div>
                <div class="info-box">
                    <div class="info-num">100%</div>
                    <div class="info-lbl">Produk Original</div>
                </div>
            </div>

            <h3>Mengapa Berbelanja di Sini?</h3>
            <p>Kami adalah authorized distributor resmi Von Dutch untuk wilayah Indonesia. Setiap produk yang kami jual dijamin keasliannya langsung dari Von Dutch global. Kami berkomitmen menghadirkan pengalaman belanja yang mudah, aman, dan menyenangkan.</p>
        </div>
    </div>

    <script src="js/database.js"></script>
    <script src="js/script.js"></script>
    <?php
    include_once 'footer.php';
    ?>
</body>

</html>