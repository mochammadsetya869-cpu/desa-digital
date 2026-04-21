<x-app-layout>

@if(session('error'))
    <div style="background:red; color:white; padding:10px; border-radius:5px; margin:10px;">
        {{ session('error') }}
    </div>
@endif

<!-- MENU -->
<div class="menu-top">

    <!-- BARIS 1 -->
    <div class="menu-row">
        <a href="/profil" class="menu-link">
            <div class="menu-icon bg-primary">
                <i class="bi bi-house"></i>
            </div>
            <p>Profil Desa</p>
        </a>

        <a href="/pengajuan" class="menu-link">
            <div class="menu-icon bg-success">
                <i class="bi bi-file-earmark-text"></i>
            </div>
            <p>Pengajuan Surat</p>
        </a>

        <a href="/status" class="menu-link">
            <div class="menu-icon bg-warning">
                <i class="bi bi-hourglass-split"></i>
            </div>
            <p>Status Pengajuan</p>
        </a>
    </div>

    <!-- BARIS 2 -->
    <div class="menu-row mt-4">

        <a href="/perpindahan" class="menu-link">
            <div class="menu-icon bg-info">
                <i class="bi bi-arrow-repeat"></i>
            </div>
            <p>Perpindahan Penduduk</p>
        </a>

        <a href="/data-penduduk" class="menu-link">
            <div class="menu-icon bg-purple">
                <i class="bi bi-people"></i>
            </div>
            <p>Data Penduduk</p>
        </a>

       <a href="/arsip" class="menu-link">
            <div class="menu-icon bg-danger">
                <i class="bi bi-archive"></i>
            </div>
            <p>Arsip Admin</p>
        </a>

    </div>

</div>


<!-- SAMBUTAN KEPALA DESA -->
<div class="sambutan-section">

    <div class="sambutan-card">

        <div class="sambutan-content">

            <!-- FOTO -->
            <div class="sambutan-img">
                <img src="{{ asset('img/kepala-desa.jpeg') }}" alt="Kepala Desa">
            </div>

            <!-- TEXT -->
            <div class="sambutan-text">
                <h3>Sambutan Kepala Desa</h3>
                <h5 class="nama">Evi Fatmawati</h5>
                <p class="jabatan">Kepala Desa Leuwigede</p>

                <p>
                    Selamat datang di Sistem Informasi Pelayanan Administrasi Desa Leuwigede.
                    Website ini merupakan penerapan konsep Desa Digital dalam meningkatkan
                    kualitas pelayanan kepada masyarakat.
                </p>

                <p>
                    Melalui portal ini, kami berkomitmen memberikan kemudahan akses informasi
                    dan layanan administrasi bagi seluruh warga. Mari bersama-sama membangun
                    desa yang lebih maju dan sejahtera.
                </p>
            </div>

        </div>

    </div>

</div>

<!-- MAP -->
<div class="map-section">

    <div class="map-card">
        <h5 class="mb-3">Maps Lokasi Desa</h5>

        <iframe 
            src="https://www.google.com/maps?q=Desa+Leuwigede+Indramayu&output=embed"
            width="100%" 
            height="300" 
            style="border:0; border-radius:10px;">
        </iframe>
    </div>

</div>


</x-app-layout>