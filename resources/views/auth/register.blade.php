<x-app-layout>

<!-- CONTENT -->
<div class="auth-wrapper">

    <a href="/" class="back-link">← Kembali</a>

    <div class="auth-card">

        <div class="auth-icon register">
            <i class="bi bi-person-plus"></i>
        </div>

        <h2>Register</h2>
        <p>Buat akun baru</p>

        <form method="POST" action="{{ route('register') }}">
            @csrf

            <input type="text" name="name" placeholder="Nama lengkap" required>

            <input type="email" name="email" placeholder="Email" required>

            <input type="password" name="password" placeholder="Password" required>

            <input type="password" name="password_confirmation" placeholder="Konfirmasi password" required>

            <button type="submit" class="btn-register">Daftar</button>
        </form>

        <div class="auth-link">
            Sudah punya akun? 
            <a href="{{ route('login') }}"class="link-auth">Login</a>
        </div>

    </div>

</div>

</x-app-layout>