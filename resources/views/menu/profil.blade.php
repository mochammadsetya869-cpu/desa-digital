<x-app-layout>
<a href="/dashboard" class="kembali-link">
    ← Kembali ke Beranda
</a>
<div class="profil-container">

    

    <!-- HEADER -->
    <div class="profil-header">
        <h1>Profil Desa {{ $profil->nama_desa }}</h1>
        <p>{{ $profil->kabupaten }}, {{ $profil->provinsi }}</p>
    </div>

    <!-- INFORMASI -->
    <div class="profil-card">
        <h2>Informasi Umum</h2>

        <div class="profil-grid">

            <div class="profil-item">
                <span>Nama Desa</span>
                <strong>{{ $profil->nama_desa }}</strong>
            </div>

            <div class="profil-item">
                <span>Kecamatan</span>
                <strong>{{ $profil->kecamatan }}</strong>
            </div>

            <div class="profil-item">
                <span>Kabupaten</span>
                <strong>{{ $profil->kabupaten }}</strong>
            </div>

            <div class="profil-item">
                <span>Provinsi</span>
                <strong>{{ $profil->provinsi }}</strong>
            </div>

            <div class="profil-item">
                <span>Kode Pos</span>
                <strong>{{ $profil->kode_pos }}</strong>
            </div>

            <div class="profil-item">
                <span>Luas Wilayah</span>
                <strong>{{ $profil->luas_wilayah }}</strong>
            </div>

        </div>
    </div>

    <!-- VISI -->
    <div class="visi-card">
        <div class="section-title">
            <div class="icon-box blue">👁</div>
            <h2>Visi Desa</h2>
        </div>

        <p class="visi-text">
            {{ $profil->visi }}
        </p>
    </div>

    <!-- MISI -->
    <div class="misi-card">
        <div class="section-title">
            <div class="icon-box green">🎯</div>
            <h2>Misi Desa</h2>
        </div>

        <div class="misi-list">
            @foreach(explode("\n", $profil->misi) as $index => $item)

                @if(trim($item) != '')
                <div class="misi-item">
                    <div class="misi-number">
                        {{ $index + 1 }}
                    </div>

                    <p>{{ $item }}</p>
                </div>
                @endif

            @endforeach
        </div>
    </div>

    <!-- BUTTON EDIT -->
    @if(Auth::check() && strtolower(trim(Auth::user()->role)) === 'admin')
        <div class="edit-wrapper">
            <a href="/profil/edit" class="btn-edit">
                ✏️ Edit Profil
            </a>
        </div>
    @endif

</div>

</x-app-layout>