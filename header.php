<!-- Bagian Header Utama Situs -->

<header class="site-header"> <!-- Kontainer header dengan posisi sticky -->
    <div class="header-inner"> <!-- Pembungkus konten header agar rapi di tengah -->
        <!-- Logo: Jika diklik akan menjalankan fungsi nav('home') untuk kembali ke beranda -->
        <img src="img/logo.png" class="header-logo" onclick="nav('home')" />

        <!-- Navigasi Desktop: Muncul di layar besar (lg), hilang di layar kecil -->
        <nav class="header-nav d-none d-lg-flex">
            <a href="index1.php" id="link-home" class="active" onclick="nav('home');return false">Home</a> <!-- Link Beranda -->
            <a href="shop.php" id="link-shop" onclick="nav('shop');return false">Semua Produk</a> <!-- Link Katalog -->
            <a href="sale.php" id="link-sale" class="nav-sale" onclick="nav('sale');return false">Sale</a> <!-- Link Promo -->
            <a href="about.php" id="link-about" onclick="nav('about');return false">Tentang Kami</a> <!-- Link Profil -->
        </nav>

        <div class="header-right"> <!-- Bagian kanan: Tombol login dan hamburger mobile -->
            <button class="btn-login" onclick="openAuthModal()">login</button> <!-- Membuka modal login -->
            <button class="hamburger d-flex d-lg-none" id="hambBtn" onclick="toggleMenu()"> <!-- Tombol menu mobile -->
                <span></span><span></span><span></span> <!-- Garis-garis ikon hamburger -->
            </button>
        </div>
    </div>
    <!-- Menu Mobile: Muncul saat tombol hamburger diklik -->
    <div class="mobile-menu" id="mobileMenu">
        <a href="index1.php" onclick="nav('home');return false">Home</a>
        <a href="shop.php" onclick="nav('shop');return false">Semua Produk</a>
        <a href="sale.php" class="nav-sale" onclick="nav('sale');return false">Sale</a>
        <a href="about.php" onclick="nav('about');return false">Tentang Kami</a>
    </div>
</header>

<!-- Menyertakan file modal login agar tersedia di setiap halaman -->
<?php include_once 'auth_modal.php'; ?>