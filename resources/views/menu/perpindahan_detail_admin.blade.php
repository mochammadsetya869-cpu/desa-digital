<x-app-layout>

<div class="detail-container">

    <h1>Detail Perpindahan Penduduk</h1>

    <div class="detail-card">

        <p><b>Nama:</b> {{ $data->nama }}</p>

        <p><b>NIK:</b> {{ $data->nik }}</p>

        <p><b>Jenis Kelamin:</b> {{ $data->jenis_kelamin }}</p>

        <p><b>Tanggal Lahir:</b> {{ $data->tanggal_lahir }}</p>

        <p><b>Jumlah Anggota:</b> {{ $data->jumlah_anggota }}</p>

        <p><b>Alamat Asal:</b> {{ $data->alamat_asal }}</p>

        <p><b>Alamat Tujuan:</b> {{ $data->alamat_tujuan }}</p>

        <p><b>Provinsi Tujuan:</b> {{ $data->provinsi_tujuan }}</p>

        <p><b>Kabupaten Tujuan:</b> {{ $data->kabupaten_tujuan }}</p>

        <p><b>Kecamatan Tujuan:</b> {{ $data->kecamatan_tujuan }}</p>

        <p><b>Desa Tujuan:</b> {{ $data->desa_tujuan }}</p>

        <p><b>Alasan Pindah:</b> {{ $data->alasan_pindah }}</p>

    </div>

    <br>

    <form action="/perpindahan/tolak/{{ $data->id }}" method="POST">

        @csrf

        <textarea
            name="catatan_admin"
            placeholder="Catatan revisi admin"
            style="width:100%;height:120px;padding:15px;border-radius:12px;"
        ></textarea>

        <br><br>

        <button type="submit"
            style="background:red;color:white;padding:12px 25px;border:none;border-radius:10px;">
            Tolak + Catatan
        </button>

    </form>

</div>

</x-app-layout>