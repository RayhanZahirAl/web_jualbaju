<!-- Bagian Kaki Halaman (Footer) -->

<footer class="site-footer"> <!-- Kontainer utama footer dengan latar abu-abu terang -->
    <div class="footer-inner row g-4"> <!-- Pembungkus konten menggunakan grid Bootstrap (row) -->
        <!-- Kolom 1: Informasi Kontak & Logo -->
        <div class="col-12 col-md-6 col-lg-4">
            <div class="footer-logo">VON DUTCH<span>.</span></div> <!-- Nama brand dengan titik merah -->
            <div style="font-size: 12px; color: var(--gray); line-height: 1.8; margin-top: 10px;">
                Email: rayhan.baihaqi27@gmail.com<br> <!-- Alamat email dukungan -->
                WhatsApp: +6285784255143<br> <!-- Nomor WhatsApp resmi -->
                Instagram: rayhanzahirb <!-- Akun media sosial -->
            </div>
        </div>
        <!-- Kolom 2: Navigasi Produk -->
        <div class="col-6 col-md-4 col-lg footer-col">
            <h4>Produk</h4> <!-- Judul kolom -->
            <ul>
                <!-- Setiap link menggunakan return false agar navigasi ditangani oleh JavaScript (goShop/nav) -->
                <li><a href="shop.php?filter=Trucker%20Hat" onclick="goShop('Trucker Hat');return false">Trucker Hats</a></li>
                <li><a href="shop.php?filter=Clothing" onclick="goShop('Clothing');return false">Clothing</a></li>
                <li><a href="shop.php?filter=Bags" onclick="goShop('Bags');return false">Bags</a></li>
                <li><a href="shop.php?filter=Accessories" onclick="goShop('Accessories');return false">Accessories</a></li>
                <li><a href="sale.php" onclick="nav('sale');return false">Sale</a></li>
            </ul>
        </div>
        <!-- Kolom 3: Navigasi Bantuan -->
        <div class="col-6 col-md-4 col-lg footer-col">
            <h4>Bantuan</h4> <!-- Berisi informasi layanan pelanggan -->
            <ul>
                <li><a>Cara Pembelian</a></li> <!-- Link statis (belum ada fungsi) -->
                <li><a>Panduan Ukuran</a></li>
                <li><a>Info Pengiriman</a></li>
                <li><a>Kebijakan Retur</a></li>
                <li><a>FAQ</a></li>
            </ul>
        </div>
        <!-- Kolom 4: Navigasi Perusahaan -->
        <div class="col-6 col-md-4 col-lg footer-col">
            <h4>Perusahaan</h4> <!-- Berisi informasi tentang brand -->
            <ul>
                <li><a href="about.php" onclick="nav('about');return false">Tentang Kami</a></li> <!-- Membuka halaman profil -->
                <li><a href="#">Kebijakan Privasi</a></li>
                <li><a href="#">Syarat & Ketentuan</a></li>
                <li><a href="#">Hubungi Kami</a></li>
            </ul>
        </div>
    </div>
    <div class="footer-bottom"> <!-- Bagian paling bawah footer -->
        <span class="footer-copy">&copy; 2026 GetSkill</span> <!-- Teks hak cipta -->
        <div class="pay-row"></div> <!-- Tempat ikon metode pembayaran (jika ada) -->
    </div>
</footer>