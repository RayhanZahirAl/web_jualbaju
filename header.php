<!-- ══ HEADER ══ -->


<header class="site-header">
    <div class="header-inner">
        <img src="img/logo.png" class="header-logo" onclick="nav('home')" />

        <nav class="header-nav d-none d-lg-flex">
            <a href="index1.php" id="link-home" class="active" onclick="nav('home');return false">Home</a>
            <a href="shop.php" id="link-shop" onclick="nav('shop');return false">Semua Produk</a>
            <a href="sale.php" id="link-sale" class="nav-sale" onclick="nav('sale');return false">Sale</a>
            <a href="about.php" id="link-about" onclick="nav('about');return false">Tentang Kami</a>
        </nav>

        <div class="header-right">
            <button class="btn-login" onclick="openAuthModal()">login</button>
            <button class="hamburger d-flex d-lg-none" id="hambBtn" onclick="toggleMenu()">
                <span></span><span></span><span></span>
            </button>
        </div>
    </div>
    <div class="mobile-menu" id="mobileMenu">
        <a href="index1.php" onclick="nav('home');return false">Home</a>
        <a href="shop.php" onclick="nav('shop');return false">Semua Produk</a>
        <a href="sale.php" class="nav-sale" onclick="nav('sale');return false">Sale</a>
        <a href="about.php" onclick="nav('about');return false">Tentang Kami</a>
    </div>
</header>

<?php include_once 'auth_modal.php'; ?>