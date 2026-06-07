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

@if($data->jenis_surat == 'KTP')

<tr>
    <td>Nomor KK</td>
    <td>: {{ $data->nomor_kk }}</td>
</tr>

<tr>
    <td>Status Perkawinan</td>
    <td>: {{ $data->status_perkawinan }}</td>
</tr>

<tr>
    <td>Alasan Pengajuan</td>
    <td>: {{ $data->alasan_pengajuan }}</td>
</tr>

@endif

@if($data->jenis_surat == 'SKTM')

<tr>
    <td>Nama Anak</td>
    <td>: {{ $data->nama_anak }}</td>
</tr>

<tr>
    <td>NIK Anak</td>
    <td>: {{ $data->nik_anak }}</td>
</tr>

<tr>
    <td>Sekolah / Universitas</td>
    <td>: {{ $data->sekolah_tujuan }}</td>
</tr>

<tr>
    <td>Tujuan Penggunaan</td>
    <td>: {{ $data->tujuan_penggunaan }}</td>
</tr>

@endif

@if($data->jenis_surat == 'Kematian')

<tr>
    <td>Hubungan Pelapor</td>
    <td>: {{ $data->hubungan_pelapor }}</td>
</tr>

<tr>
    <td>Nama Almarhum</td>
    <td>: {{ $data->nama_almarhum }}</td>
</tr>

<tr>
    <td>NIK Almarhum</td>
    <td>: {{ $data->nik_almarhum }}</td>
</tr>

<tr>
    <td>Tempat Meninggal</td>
    <td>: {{ $data->tempat_meninggal }}</td>
</tr>

<tr>
    <td>Penyebab Meninggal</td>
    <td>: {{ $data->penyebab_meninggal }}</td>
</tr>

@endif

@if($data->jenis_surat == 'Slip Gaji')

<tr>
    <td>Penghasilan Bulanan</td>
    <td>: {{ $data->penghasilan_bulanan }}</td>
</tr>

@endif

@if($data->jenis_surat == 'Usaha')

<tr>
    <td>Nama Usaha</td>
    <td>: {{ $data->nama_usaha }}</td>
</tr>

<tr>
    <td>Jenis Usaha</td>
    <td>: {{ $data->jenis_usaha }}</td>
</tr>

<tr>
    <td>Alamat Usaha</td>
    <td>: {{ $data->alamat_usaha }}</td>
</tr>

<tr>
    <td>Tahun Berdiri</td>
    <td>: {{ $data->tahun_berdiri }}</td>
</tr>

@endif

@if($data->jenis_surat == 'Domisili')

<tr>
    <td>Alamat Asal</td>
    <td>: {{ $data->alamat_asal }}</td>
</tr>

<tr>
    <td>Alamat Domisili</td>
    <td>: {{ $data->alamat_domisili }}</td>
</tr>

<tr>
    <td>Tanggal Mulai Menetap</td>
    <td>: {{ $data->tanggal_mulai_menetap }}</td>
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