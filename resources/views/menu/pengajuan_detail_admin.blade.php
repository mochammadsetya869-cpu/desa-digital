@section('title', 'Detail Pengajuan')
<x-app-layout>

<div class="detail-container">

    <a href="/pengajuan" class="detail-kembali">
        ← Kembali ke Data Pengajuan
    </a>

    <h1 class="detail-title">
        Detail Pengajuan Surat
    </h1>

    <div class="detail-card">

        <div class="detail-item">
            <span class="detail-label">
                Nama Lengkap
            </span>

            <span class="detail-value">
                {{ $data->nama }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                NIK
            </span>

            <span class="detail-value">
                {{ $data->nik }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Jenis Surat
            </span>

            <span class="detail-value">
                {{ $data->jenis_surat }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Tempat Lahir
            </span>

            <span class="detail-value">
                {{ $data->tempat_lahir }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Tanggal Lahir
            </span>

            <span class="detail-value">
                {{ $data->tanggal_lahir }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Jenis Kelamin
            </span>

            <span class="detail-value">
                {{ $data->jenis_kelamin }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Agama
            </span>

            <span class="detail-value">
                {{ $data->agama }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Pekerjaan
            </span>

            <span class="detail-value">
                {{ $data->pekerjaan }}
            </span>
        </div>

        <div class="detail-item">
            <span class="detail-label">
                Alamat
            </span>

            <span class="detail-value">
                {{ $data->alamat }}
            </span>
        </div>

        @if($data->keterangan)

        <div class="detail-item">
            <span class="detail-label">
                Keterangan Tambahan
            </span>

            <span class="detail-value">
                {{ $data->keterangan }}
            </span>
        </div>

        @endif

                {{-- KTP / KK --}}
        @if($data->jenis_surat == 'KTP')

        <div class="detail-item">
            <span class="detail-label">Nomor KK</span>
            <span class="detail-value">{{ $data->nomor_kk }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Status Perkawinan</span>
            <span class="detail-value">{{ $data->status_perkawinan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alasan Pengajuan</span>
            <span class="detail-value">{{ $data->alasan_pengajuan }}</span>
        </div>

        @endif

        {{-- SKTM --}}
        @if($data->jenis_surat == 'SKTM')

        <div class="detail-item">
            <span class="detail-label">Nama Anak</span>
            <span class="detail-value">{{ $data->nama_anak }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">NIK Anak</span>
            <span class="detail-value">{{ $data->nik_anak }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Sekolah / Universitas</span>
            <span class="detail-value">{{ $data->sekolah_tujuan }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tujuan Penggunaan</span>
            <span class="detail-value">{{ $data->tujuan_penggunaan }}</span>
        </div>

        @endif

        {{-- KEMATIAN --}}
        @if($data->jenis_surat == 'Kematian')

        <div class="detail-item">
            <span class="detail-label">Hubungan Pelapor</span>
            <span class="detail-value">{{ $data->hubungan_pelapor }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Nama Almarhum</span>
            <span class="detail-value">{{ $data->nama_almarhum }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">NIK Almarhum</span>
            <span class="detail-value">{{ $data->nik_almarhum }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tempat Meninggal</span>
            <span class="detail-value">{{ $data->tempat_meninggal }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Penyebab Meninggal</span>
            <span class="detail-value">{{ $data->penyebab_meninggal }}</span>
        </div>

        @endif

        {{-- PENGHASILAN --}}
        @if($data->jenis_surat == 'Slip Gaji')

        <div class="detail-item">
            <span class="detail-label">Penghasilan Bulanan</span>
            <span class="detail-value">{{ $data->penghasilan_bulanan }}</span>
        </div>

        @endif

        {{-- USAHA --}}
        @if($data->jenis_surat == 'Usaha')

        <div class="detail-item">
            <span class="detail-label">Nama Usaha</span>
            <span class="detail-value">{{ $data->nama_usaha }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Jenis Usaha</span>
            <span class="detail-value">{{ $data->jenis_usaha }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alamat Usaha</span>
            <span class="detail-value">{{ $data->alamat_usaha }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tahun Berdiri</span>
            <span class="detail-value">{{ $data->tahun_berdiri }}</span>
        </div>

        @endif

        {{-- DOMISILI --}}
        @if($data->jenis_surat == 'Domisili')

        <div class="detail-item">
            <span class="detail-label">Alamat Asal</span>
            <span class="detail-value">{{ $data->alamat_asal }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Alamat Domisili</span>
            <span class="detail-value">{{ $data->alamat_domisili }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Tanggal Mulai Menetap</span>
            <span class="detail-value">{{ $data->tanggal_mulai_menetap }}</span>
        </div>

        @endif

        <div class="detail-item">
            <span class="detail-label">
                Status Pengajuan
            </span>

            <span class="detail-status">
                {{ $data->status }}
            </span>
        </div>

    </div>

    <br>

    @if($data->status == 'pending')

    <a href="/pengajuan/setuju/{{ $data->id }}"
    class="btn-setuju"
    onclick="return confirm('Yakin ingin menyetujui pengajuan ini?')">

        Setujui

    </a>

    <br><br>

    <form action="/pengajuan/tolak/{{ $data->id }}"
        method="POST">

        @csrf

        <textarea
            name="catatan_admin"
            placeholder="Catatan revisi admin"
            style="
                width:100%;
                height:120px;
                padding:15px;
                border-radius:12px;
                border:1px solid #ccc;
            "
        ></textarea>

        <br><br>

        <button type="submit"
            style="
                background:red;
                color:white;
                padding:12px 25px;
                border:none;
                border-radius:10px;
            ">

            Tolak + Catatan

        </button>

    </form>

    @endif

</div>

</x-app-layout>