<!DOCTYPE html>
<html>
<head>

    <title>Surat Keterangan Pindah</title>

    <style>
        {!! file_get_contents(public_path('css/pdf.css')) !!}
    </style>

</head>
<body>

<div class="header">

    <h2>PEMERINTAH DESA LEUWIGEDE</h2>

    <p>Kecamatan Widasari - Kabupaten Indramayu</p>

    <hr>

</div>

<div class="judul">
    SURAT KETERANGAN PINDAH PENDUDUK
</div>

<table>

<tr>
    <td width="220">Nama Lengkap</td>
    <td>: {{ $data->nama }}</td>
</tr>

<tr>
    <td>NIK</td>
    <td>: {{ $data->nik }}</td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>: {{ $data->jenis_kelamin }}</td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>: {{ $data->tanggal_lahir }}</td>
</tr>

<tr>
    <td>Jumlah Anggota Keluarga</td>
    <td>: {{ $data->jumlah_anggota }}</td>
</tr>

<tr>
    <td>Alamat Asal</td>
    <td>: {{ $data->alamat_asal }}</td>
</tr>

<tr>
    <td>Alamat Tujuan</td>
    <td>: {{ $data->alamat_tujuan }}</td>
</tr>

<tr>
    <td>Provinsi Tujuan</td>
    <td>: {{ $data->provinsi_tujuan }}</td>
</tr>

<tr>
    <td>Kabupaten Tujuan</td>
    <td>: {{ $data->kabupaten_tujuan }}</td>
</tr>

<tr>
    <td>Kecamatan Tujuan</td>
    <td>: {{ $data->kecamatan_tujuan }}</td>
</tr>

<tr>
    <td>Desa Tujuan</td>
    <td>: {{ $data->desa_tujuan }}</td>
</tr>

<tr>
    <td>Alasan Pindah</td>
    <td>: {{ $data->alasan_pindah }}</td>
</tr>

</table>

<p class="keterangan">
    Demikian surat keterangan pindah penduduk ini dibuat untuk dipergunakan sebagaimana mestinya.
</p>

<div class="footer">

    <p>Leuwigede, {{ date('d-m-Y') }}</p>

    <div class="ttd">
        Kepala Desa Leuwigede
    </div>

</div>

</body>
</html>