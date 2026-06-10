<!DOCTYPE html> <!-- Standar HTML5 -->
<html lang="en"> <!-- Dokumen dalam Bahasa Inggris -->

<head>
    <meta charset="UTF-8"> <!-- Encoding karakter -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!-- Viewport HP -->
    <title>Tentang Kami - Von Dutch</title> <!-- Judul tab -->
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Source+Serif+4:wght@300;400;600;700&display=swap" rel="stylesheet"> <!-- Font -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"> <!-- Bootstrap -->
    <link rel="stylesheet" href="css/index.css"> <!-- CSS Utama -->
</head>

<body>
    <?php
    include_once 'header.php' // Memasukkan Header
    ?>

    <!-- Halaman Tentang Kami -->
    <div class="page active" id="page-about"> <!-- Div konten profil perusahaan -->
        <div class="about-wrap"> <!-- Pembungkus isi teks profil agar lebarnya terbatas (760px di CSS) -->
            <div class="breadcrumb" style="padding-left:0"> <!-- Penunjuk lokasi -->
                <span onclick="nav('home')">Home</span>
                <span class="sep">/</span>
                <span class="current">Tentang Kami</span>
            </div>
            <h1>Tentang Von Dutch Indonesia</h1> <!-- Judul Halaman -->
            <div class="about-img"><img src="img/home3.png" alt="Von Dutch" /></div> <!-- Gambar profil toko -->

            <p>Selamat datang di toko resmi Von Dutch Indonesia — satu-satunya official store untuk brand ikonik Von Dutch di Indonesia. Kami hadir untuk membawa kamu lebih dekat dengan gaya streetwear legendaris yang telah menemani budaya pop dunia sejak tahun 1999.</p> <!-- Paragraf pembuka -->

            <h3>Tentang Von Dutch</h3> <!-- Sub-judul -->
            <p>Von Dutch adalah merek fashion asal Amerika yang lahir dari semangat Kustom Kulture dan dipopulerkan oleh desainer ternama Christian Audigier di awal tahun 2000-an. Trucker hat ikonik Von Dutch menjadi simbol gaya yang dikenakan oleh Paris Hilton, Britney Spears, dan sederet selebriti dunia.</p>
            <p>Kini, Von Dutch kembali hadir dengan semangat baru — memadukan warisan streetwear autentik dengan estetika kontemporer yang relevan untuk generasi saat ini.</p>

            <div class="info-grid"> <!-- Grid angka statistik (Tahun, Pelanggan, Originalitas) -->
                <div class="info-box"> <!-- Kotak angka 1 -->
                    <div class="info-num">25+</div>
                    <div class="info-lbl">Tahun Berdiri</div>
                </div>
                <div class="info-box"> <!-- Kotak angka 2 -->
                    <div class="info-num">50K+</div>
                    <div class="info-lbl">Pelanggan</div>
                </div>
                <div class="info-box"> <!-- Kotak angka 3 -->
                    <div class="info-num">100%</div>
                    <div class="info-lbl">Produk Original</div>
                </div>
            </div>

            <h3>Mengapa Berbelanja di Sini?</h3> <!-- Alasan berbelanja -->
            <p>Kami adalah authorized distributor resmi Von Dutch untuk wilayah Indonesia. Setiap produk yang kami jual dijamin keasliannya langsung dari Von Dutch global. Kami berkomitmen menghadirkan pengalaman belanja yang mudah, aman, dan menyenangkan.</p>
        </div>
    </div>

    <script src="js/database.js"></script> <!-- Memuat data -->
    <script src="js/script.js"></script> <!-- Memuat fungsi navigasi -->
    <?php
    include_once 'footer.php'; // Memasukkan Footer
    ?>
</body>

</html>