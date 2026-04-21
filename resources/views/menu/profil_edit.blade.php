<x-app-layout>

<div class="container mt-4">

    <h2>Edit Profil Desa</h2>

    <form method="POST" action="/profil/update">
        @csrf

        <div class="mb-3">
            <label>Nama Desa</label>
            <input type="text" name="nama_desa" class="form-control" value="{{ $profil->nama_desa }}">
        </div>

        <div class="mb-3">
            <label>Kecamatan</label>
            <input type="text" name="kecamatan" class="form-control" value="{{ $profil->kecamatan }}">
        </div>

        <div class="mb-3">
            <label>Kabupaten</label>
            <input type="text" name="kabupaten" class="form-control" value="{{ $profil->kabupaten }}">
        </div>

        <div class="mb-3">
            <label>Provinsi</label>
            <input type="text" name="provinsi" class="form-control" value="{{ $profil->provinsi }}">
        </div>

        <div class="mb-3">
            <label>Kode Pos</label>
            <input type="text" name="kode_pos" class="form-control" value="{{ $profil->kode_pos }}">
        </div>

        <div class="mb-3">
            <label>Luas Wilayah</label>
            <input type="text" name="luas_wilayah" class="form-control" value="{{ $profil->luas_wilayah }}">
        </div>

        <div class="mb-3">
            <label>Visi</label>
            <textarea name="visi" class="form-control">{{ $profil->visi }}</textarea>
        </div>

        <div class="mb-3">
            <label>Misi (pisahkan dengan enter)</label>
            <textarea name="misi" class="form-control" rows="5">{{ $profil->misi }}</textarea>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/profil" class="btn btn-secondary">Kembali</a>

    </form>

</div>

</x-app-layout>