
<nav class="navbar-custom">

    <div class="nav-container">

        <!-- LOGO -->
        <div class="nav-left">
            <img src="{{ asset('img/logo-indramayu.png') }}" width="40">
            <div>
                <div>Desa Leuwigede</div>
                <small>Kabupaten Indramayu</small>
            </div>
        </div>

        <!-- MENU -->
        <div class="nav-right">
            <div class="dropdown">
                <button onclick="toggleMenu()" class="btn text-white">
                    ☰
                </button>

                <div id="dropdownMenu" class="dropdown-menu-custom">

                    @auth
                        <div class="dropdown-user" style="color: black; padding: 10px; font-weight: bold;">
                            <i class="bi bi-person"></i>
                            {{ auth()->user()->name }}
                        </div>

                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="dropdown-item Logout-btn">
                                <i class ="bi bi-box-arrow-right"></i>Logout</button>
                        </form>
                    @else
                        <a href="{{ route('login') }}" class="dropdown-item">Login</a>
                        <a href="{{ route('register') }}" class="dropdown-item">Register</a>
                    @endauth

                </div>
            </div>
        </div>

    </div>

</nav>

<!-- SCRIPT -->
<script>
function toggleMenu() {
    let menu = document.getElementById("dropdownMenu");
    menu.style.display = (menu.style.display === "block") ? "none" : "block";
}
</script>