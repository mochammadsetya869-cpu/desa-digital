<x-app-layout>

<div class="detail-container">

    <a href="/arsip" class="detail-kembali">
        ← Kembali ke Arsip
    </a>

    <h1 class="detail-title">
        Perpindahan Penduduk
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
            <span class="detail-label">Kabupaten Tujuan</span>
            <span class="detail-value">
                {{ $data->kabupaten_tujuan }}
            </span>
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