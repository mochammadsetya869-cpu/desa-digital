<x-app-layout>

<div class="form-container">

    <h1 class="form-title">
        Edit Pengajuan
    </h1>

    <form action="/pengajuan/update/{{ $data->id }}"
          method="POST">

        @csrf

        <div class="form-group">
            <label>Nama Lengkap</label>

            <input type="text"
                   name="nama"
                   value="{{ $data->nama }}">
        </div>

        <div class="form-group">
            <label>NIK</label>

            <input type="text"
                   name="nik"
                   value="{{ $data->nik }}">
        </div>

        <div class="form-group">
            <label>Jenis Surat</label>

            <input type="text"
                   name="jenis_surat"
                   value="{{ $data->jenis_surat }}">
        </div>

        <div class="form-group">
            <label>Tempat Lahir</label>

            <input type="text"
                   name="tempat_lahir"
                   value="{{ $data->tempat_lahir }}">
        </div>

        <div class="form-group">
            <label>Tanggal Lahir</label>

            <input type="date"
                   name="tanggal_lahir"
                   value="{{ $data->tanggal_lahir }}">
        </div>

        <div class="form-group">
            <label>Jenis Kelamin</label>

            <input type="text"
                   name="jenis_kelamin"
                   value="{{ $data->jenis_kelamin }}">
        </div>

        <div class="form-group">
            <label>Agama</label>

            <input type="text"
                   name="agama"
                   value="{{ $data->agama }}">
        </div>

        <div class="form-group">
            <label>Pekerjaan</label>

            <input type="text"
                   name="pekerjaan"
                   value="{{ $data->pekerjaan }}">
        </div>

        <div class="form-group">
            <label>Alamat</label>

            <textarea name="alamat">{{ $data->alamat }}</textarea>
        </div>

        <div class="form-group">
            <label>Keterangan</label>

            <textarea name="keterangan">{{ $data->keterangan }}</textarea>
        </div>

        <button type="submit"
                class="btn-submit">

            Simpan Perubahan

        </button>

    </form>

</div>

</x-app-layout>