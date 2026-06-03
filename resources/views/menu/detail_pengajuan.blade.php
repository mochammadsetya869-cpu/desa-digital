<x-app-layout>

<div class="detail-container">

    <a href="/arsip" class="detail-kembali">
        ← Kembali ke Data Arsip
    </a>

    <h1 class="detail-title">
        Detail {{ $data->jenis_surat }}
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