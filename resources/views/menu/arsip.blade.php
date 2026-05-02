<x-app-layout>

<div class="arsip-container">

    <a href="/dashboard" class="kembali-link">
        ← Kembali ke Beranda
    </a>

    <div class="arsip-header">

        <div class="arsip-icon">
            🗂
        </div>

        <h1>Arsip Administrasi</h1>

        <p>
            Dokumen dan surat-surat desa
        </p>

    </div>

    {{-- Statistik --}}
    <div class="arsip-statistik">

        <div class="stat-card hijau">
            <h2>{{ $pengajuan->count() }}</h2>
            <span>Pengajuan Selesai</span>
        </div>

        <div class="stat-card biru">
            <h2>{{ $perpindahan->count() }}</h2>
            <span>Perpindahan Selesai</span>
        </div>

        <div class="stat-card ungu">
            <h2>{{ $pengajuan->count() + $perpindahan->count() }}</h2>
            <span>Total Arsip</span>
        </div>

</div>


    {{-- DATA PENGAJUAN --}}
    @foreach($pengajuan as $item)

    <div class="arsip-card">

        <div class="arsip-kiri">

            <div class="arsip-icon-file">
                📄
            </div>

            <div class="arsip-detail">

                <div class="arsip-judul">

                    <h3>{{ $item->jenis_surat }}</h3>

                    <span class="badge keluar">
                        Surat Keluar
                    </span>

                </div>

                <p>
                    <strong>No. Surat:</strong>
                    474/00{{ $item->id }}/DS/III/2026
                </p>

                <p>
                    <strong>Perihal:</strong>
                    Surat {{ $item->jenis_surat }} untuk {{ $item->nama }}
                </p>

                <p>
                    <strong>Tanggal:</strong>
                    {{ $item->created_at->format('d F Y') }}
                </p>

            </div>

        </div>

        <div class="arsip-action">

            <a href="/arsip/pengajuan/{{ $item->id }}">
                👁 Lihat
            </a>

            <a href="#">
                ⬇ Unduh
            </a>

        </div>

    </div>

    @endforeach



    {{-- DATA PERPINDAHAN --}}
   @foreach($perpindahan as $item)

    <div class="arsip-card">

        <div class="arsip-kiri">

            <div class="arsip-icon-file">
                📄
            </div>

            <div class="arsip-detail">

                <div class="arsip-judul">

                    <h3>Perpindahan Penduduk</h3>

                    <span class="badge masuk">
                        Surat Masuk
                    </span>

                </div>

                <p>
                    <strong>No. Surat:</strong>
                    500/00{{ $item->id }}/DS/III/2026
                </p>

                <p>
                    <strong>Perihal:</strong>
                    Perpindahan ke {{ $item->kabupaten_tujuan }}
                </p>

                <p>
                    <strong>Tanggal:</strong>
                    {{ $item->created_at->format('d F Y') }}
                </p>

            </div>

        </div>

        <div class="arsip-action">

            <a href="/arsip/perpindahan/{{ $item->id }}">
                👁 Lihat
            </a>

            <a href="#">
                ⬇ Unduh
            </a>

        </div>

    </div>

    @endforeach


    {{-- INFORMASI --}}
    <div class="arsip-info">

        <h3>Informasi Arsip</h3>

        <p>
            • Surat Keluar: surat yang diterbitkan pemerintah desa
        </p>

        <p>
            • Surat Masuk: surat perpindahan dan administrasi masuk
        </p>

        <p>
            • Internal: dokumen administrasi internal desa
        </p>

    </div>

</div>

</x-app-layout>