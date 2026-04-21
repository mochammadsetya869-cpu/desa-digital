<x-app-layout>
<div class="container mt-4">

    <a href="/dashboard">← Kembali ke Beranda</a>

    <h2 class="text-center mt-3">
        Profil Desa {{ $profil->nama_desa }}
    </h2>

    <p class="text-center text-muted">
        {{ $profil->kabupaten }}, {{ $profil->provinsi }}
    </p>

    <!-- INFORMASI -->
    <div class="card p-4 mt-4 shadow-sm">
        <h4>Informasi Umum</h4>

        <div class="row mt-3">
            <div class="col-md-6">
                <p><b>Nama Desa:</b> {{ $profil->nama_desa }}</p>
                <p><b>Kabupaten:</b> {{ $profil->kabupaten }}</p>
                <p><b>Kode Pos:</b> {{ $profil->kode_pos }}</p>
            </div>

            <div class="col-md-6">
                <p><b>Kecamatan:</b> {{ $profil->kecamatan }}</p>
                <p><b>Provinsi:</b> {{ $profil->provinsi }}</p>
                <p><b>Luas:</b> {{ $profil->luas_wilayah }}</p>
            </div>
        </div>
    </div>

    <!-- VISI -->
    <div class="card p-4 mt-4 shadow-sm bg-light">
        <h4>Visi Desa</h4>
        <p>{{ $profil->visi }}</p>
    </div>

    <!-- MISI -->
    <div class="card p-4 mt-4 shadow-sm">
        <h4>Misi Desa</h4>

        @foreach(explode("\n", $profil->misi) as $item)
            <p>• {{ $item }}</p>
        @endforeach
    </div>

        @if(Auth::check() && strtolower(trim(Auth::user()->role)) === 'admin')
            <a href="/profil/edit" class="btn-edit">
                ✏️ Edit Profil
            </a>
        @endif
</div>

</x-app-layout>