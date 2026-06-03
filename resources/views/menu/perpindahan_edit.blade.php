@section('title', 'Edit Perpindahan Penduduk')
<x-app-layout>

<div class="detail-container">

    <h1 class="detail-title">
        Edit Perpindahan
    </h1>

    <form action="/perpindahan/update/{{ $data->id }}"
        method="POST">

        @csrf
        @method('PUT')

        <label>Nama Lengkap</label>
        <input type="text"
            name="nama"
            value="{{ $data->nama }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>NIK</label>
        <input type="text"
            name="nik"
            value="{{ $data->nik }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Jenis Kelamin</label>
        <select name="jenis_kelamin"
                style="width:100%;padding:12px;margin-bottom:15px;">

            <option value="L"
                {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>
                Laki-laki
            </option>

            <option value="P"
                {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>
                Perempuan
            </option>

        </select>

        <label>Tanggal Lahir</label>
        <input type="date"
            name="tanggal_lahir"
            value="{{ $data->tanggal_lahir }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Jumlah Anggota</label>
        <input type="number"
            name="jumlah_anggota"
            value="{{ $data->jumlah_anggota }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Alamat Asal</label>
        <textarea name="alamat_asal"
                style="width:100%;padding:12px;margin-bottom:15px;">{{ $data->alamat_asal }}</textarea>

        <label>Alamat Tujuan</label>
        <textarea name="alamat_tujuan"
                style="width:100%;padding:12px;margin-bottom:15px;">{{ $data->alamat_tujuan }}</textarea>

        <label>Provinsi Tujuan</label>
        <input type="text"
            name="provinsi_tujuan"
            value="{{ $data->provinsi_tujuan }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Kabupaten Tujuan</label>
        <input type="text"
            name="kabupaten_tujuan"
            value="{{ $data->kabupaten_tujuan }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Kecamatan Tujuan</label>
        <input type="text"
            name="kecamatan_tujuan"
            value="{{ $data->kecamatan_tujuan }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Desa Tujuan</label>
        <input type="text"
            name="desa_tujuan"
            value="{{ $data->desa_tujuan }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <label>Alasan Pindah</label>
        <input type="text"
            name="alasan_pindah"
            value="{{ $data->alasan_pindah }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

</div>

</x-app-layout>