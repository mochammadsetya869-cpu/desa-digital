@section('title', 'Detail Perpindahan Penduduk')
<x-app-layout>

<div class="detail-container">


        <a href="/perpindahan" class="detail-kembali">
                ← Kembali ke Perpendahan Penduduk
            </a>

    <h1 class="detail-title">
        Detail Perpindahan Penduduk
    </h1>

    <div class="detail-card">

        <div class="detail-item">
            <span class="detail-label">Nama Lengkap</span>
            <span class="detail-value">{{ $data->nama }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">NIK</span>
            <span class="detail-value">{{ $data->nik }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Jenis Kelamin</span>
            <span class="detail-value">{{ $data->jenis_kelamin }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tanggal Lahir</span>
            <span class="detail-value">{{ $data->tanggal_lahir }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Jumlah Anggota</span>
            <span class="detail-value">{{ $data->jumlah_anggota }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alamat Asal</span>
            <span class="detail-value">{{ $data->alamat_asal }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alamat Tujuan</span>
            <span class="detail-value">{{ $data->alamat_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Provinsi Tujuan</span>
            <span class="detail-value">{{ $data->provinsi_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Kabupaten Tujuan</span>
            <span class="detail-value">{{ $data->kabupaten_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Kecamatan Tujuan</span>
            <span class="detail-value">{{ $data->kecamatan_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Desa Tujuan</span>
            <span class="detail-value">{{ $data->desa_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alasan Pindah</span>
            <span class="detail-value">{{ $data->alasan_pindah }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Status Pengajuan</span>

            <span class="detail-status">
                {{ $data->status }}
            </span>
        </div>

    </div>

    <br>

    @if($data->status == 'pending')

    <form action="{{ route('perpindahan.setujui', $data->id) }}"
        method="POST">

        @csrf

        <button class="btn-setuju"
                onclick="return confirm('Yakin ingin menyetujui permohonan perpindahan ini?')">

            Setujui

        </button>

    </form>

    <br><br>

    <form action="/perpindahan/tolak/{{ $data->id }}"
        method="POST">

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
    
         @endif
</div>

</x-app-layout>