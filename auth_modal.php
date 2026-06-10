<!-- Modal Login & Register (Muncul sebagai Pop-up) -->
<div class="auth-overlay" id="authOverlay" onclick="if(event.target === this) closeAuthModal()"> <!-- Latar belakang gelap, klik luar modal untuk tutup -->
    <div class="auth-modal"> <!-- Kotak modal putih utama -->
        <button class="auth-close" onclick="closeAuthModal()">&times;</button> <!-- Tombol silang (X) pojok kanan atas -->
        <div class="auth-title"> <!-- Logo dalam modal -->
            <img src="img/logo.png" alt="Von Dutch Logo">
        </div>

        <div class="auth-tabs"> <!-- Pilihan tab antara Login atau Daftar -->
            <div class="auth-tab active" id="tabLogin" onclick="switchAuthTab('login')">Login</div> <!-- Tombol Tab Login -->
            <div class="auth-tab" id="tabRegister" onclick="switchAuthTab('register')">Daftar</div> <!-- Tombol Tab Daftar -->
        </div>

        <!-- Formulir Login -->
        <div id="formLogin">
            <form onsubmit="event.preventDefault(); toast('Berhasil Login!')"> <!-- Mencegah reload dan munculkan notifikasi simulasi -->
                <div class="auth-form-group"> <!-- Grup Input Email -->
                    <label>Email Address</label>
                    <input type="email" class="auth-input" placeholder="your@email.com" required>
                </div>
                <div class="auth-form-group"> <!-- Grup Input Password -->
                    <label>Password</label>
                    <input type="password" class="auth-input" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-auth">Sign In</button> <!-- Tombol Masuk -->
            </form>
            <!-- Teks bantuan untuk pindah tab -->
            <div class="auth-switch">Belum punya akun? <span onclick="switchAuthTab('register')">Daftar Sekarang</span></div>
        </div>

        <!-- Formulir Registrasi (Awalnya tersembunyi via style="display:none") -->
        <div id="formRegister" style="display:none">
            <form onsubmit="event.preventDefault(); toast('Pendaftaran Berhasil!')"> <!-- Mencegah reload -->
                <div class="auth-form-group"> <!-- Grup Input Nama -->
                    <label>Full Name</label>
                    <input type="text" class="auth-input" placeholder="Nama Lengkap" required>
                </div>
                <div class="auth-form-group"> <!-- Grup Input Email -->
                    <label>Email Address</label>
                    <input type="email" class="auth-input" placeholder="your@email.com" required>
                </div>
                <div class="auth-form-group"> <!-- Grup Input Password baru -->
                    <label>Password</label>
                    <input type="password" class="auth-input" placeholder="Min. 8 karakter" required>
                </div>
                <button type="submit" class="btn-auth">Create Account</button> <!-- Tombol Buat Akun -->
            </form>
            <!-- Teks bantuan untuk kembali ke login -->
            <div class="auth-switch">Sudah punya akun? <span onclick="switchAuthTab('login')">Masuk di sini</span></div>
        </div>
    </div>
</div>