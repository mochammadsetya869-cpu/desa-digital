<x-app-layout>

<!-- CONTENT -->
<div class="auth-wrapper">

    <a href="/" class="back-link">← Kembali</a>

    <div class="auth-card">

        <div class="auth-icon login">
            <i class="bi bi-box-arrow-in-right"></i>
        </div>

        <h2>Login</h2>
        <p>Masuk ke sistem administrasi desa</p>

        <form method="POST" action="{{ route('login') }}">
            @csrf
            <input type="email" name="email" placeholder="Masukkan email" required>

            <input type="password" name="password" placeholder="Masukkan password" required>

            <button type="submit" class="btn-login">Masuk</button>
        </form>

        <div class="auth-link">
            Belum punya akun? 
            <a href="{{ route('register') }}"class="link-auth">Daftar di sini</a>
        </div>

    </div>

</div>

</x-app-layout>