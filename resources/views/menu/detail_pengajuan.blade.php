<x-app-layout>

<div class="detail-container">

    <a href="/arsip" class="detail-kembali">
        ← Kembali ke Arsip
    </a>

    <h1 class="detail-title">
        {{ $data->jenis_surat }}
    </h1>

    <div class="detail-card">

        <div class="detail-item">
            <span class="detail-label">Nama</span>
            <span class="detail-value">{{ $data->nama }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">NIK</span>
            <span class="detail-value">{{ $data->nik }}</span>
        </div>

        <div class="detail-item">
            <span class="detail-label">Status</span>

            <span class="detail-status">
                {{ $data->status }}
            </span>
        </div>

    </div>

</div>

</x-app-layout>