<!-- ── AUTH MODAL ── -->
<div class="auth-overlay" id="authOverlay" onclick="if(event.target === this) closeAuthModal()">
    <div class="auth-modal">
        <button class="auth-close" onclick="closeAuthModal()">&times;</button>
        <div class="auth-title">
            <img src="img/logo.png" alt="Von Dutch Logo">
        </div>

        <div class="auth-tabs">
            <div class="auth-tab active" id="tabLogin" onclick="switchAuthTab('login')">Login</div>
            <div class="auth-tab" id="tabRegister" onclick="switchAuthTab('register')">Daftar</div>
        </div>

        <!-- Login Form -->
        <div id="formLogin">
            <form onsubmit="event.preventDefault(); toast('Berhasil Login!')">
                <div class="auth-form-group">
                    <label>Email Address</label>
                    <input type="email" class="auth-input" placeholder="your@email.com" required>
                </div>
                <div class="auth-form-group">
                    <label>Password</label>
                    <input type="password" class="auth-input" placeholder="••••••••" required>
                </div>
                <button type="submit" class="btn-auth">Sign In</button>
            </form>
            <div class="auth-switch">Belum punya akun? <span onclick="switchAuthTab('register')">Daftar Sekarang</span></div>
        </div>

        <!-- Register Form -->
        <div id="formRegister" style="display:none">
            <form onsubmit="event.preventDefault(); toast('Pendaftaran Berhasil!')">
                <div class="auth-form-group">
                    <label>Full Name</label>
                    <input type="text" class="auth-input" placeholder="Nama Lengkap" required>
                </div>
                <div class="auth-form-group">
                    <label>Email Address</label>
                    <input type="email" class="auth-input" placeholder="your@email.com" required>
                </div>
                <div class="auth-form-group">
                    <label>Password</label>
                    <input type="password" class="auth-input" placeholder="Min. 8 karakter" required>
                </div>
                <button type="submit" class="btn-auth">Create Account</button>
            </form>
            <div class="auth-switch">Sudah punya akun? <span onclick="switchAuthTab('login')">Masuk di sini</span></div>
        </div>
    </div>
</div>