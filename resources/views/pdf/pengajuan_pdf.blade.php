<!DOCTYPE html>
<html>
<head>

    <title>Surat {{ $data->jenis_surat }}</title>

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
    SURAT {{ strtoupper($data->jenis_surat) }}
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
    <td>Tempat Lahir</td>
    <td>: {{ $data->tempat_lahir }}</td>
</tr>

<tr>
    <td>Tanggal Lahir</td>
    <td>: {{ $data->tanggal_lahir }}</td>
</tr>

<tr>
    <td>Jenis Kelamin</td>
    <td>: {{ $data->jenis_kelamin }}</td>
</tr>

<tr>
    <td>Alamat</td>
    <td>: {{ $data->alamat }}</td>
</tr>

<tr>
    <td>Agama</td>
    <td>: {{ $data->agama }}</td>
</tr>

<tr>
    <td>Pekerjaan</td>
    <td>: {{ $data->pekerjaan }}</td>
</tr>

@if($data->keterangan)
<tr>
    <td>Keterangan</td>
    <td>: {{ $data->keterangan }}</td>
</tr>
@endif

</table>

<p class="keterangan">
    Demikian surat ini dibuat untuk dipergunakan sebagaimana mestinya.
</p>

<div class="footer">

    <p>Leuwigede, {{ date('d-m-Y') }}</p>

    <div class="ttd">
        Kepala Desa Leuwigede
    </div>

</div>

</body>
</html>