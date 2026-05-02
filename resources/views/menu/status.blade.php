<x-app-layout>

<a href="/dashboard" class="kembali-link">
    ← Kembali ke Beranda
</a>

<div class="container mt-4">

    <h3 class="text-center mb-2 fw-bold">Status Pengajuan</h3>
    <p class="text-center text-muted mb-4">Pantau status pengajuan surat Anda</p>

    {{-- SUMMARY --}}
    <div class="row text-center mb-4 g-3">

       <div class="summary-wrapper">

            <div class="summary-box proses">
                <h3>{{ $data->where('status','diproses')->count() }}</h3>
                <p>Dalam Proses</p>
            </div>

            <div class="summary-box verifikasi">
                <h3>{{ $data->where('status','pending')->count() }}</h3>
                <p>Verifikasi</p>
            </div>

            <div class="summary-box selesai">
                <h3>{{ $data->where('status','selesai')->count() }}</h3>
                <p>Selesai</p>
            </div>

            <div class="summary-box ditolak">
                <h3>{{ $data->where('status','ditolak')->count() }}</h3>
                <p>Ditolak</p>
            </div>

        </div>

    </div>

    {{-- LIST --}}
    @foreach($data as $d)
    <div class="card p-4 mb-3 shadow-sm custom-card">

        <div class="row align-items-center">

            {{-- KIRI --}}
            <div class="col-md-7">

                <div class="mb-2">
                    <span class="badge bg-secondary">PGJ{{ $d->id }}</span>

                    @if($d->status == 'pending')
                        <span class="badge badge-verifikasi">Sedang Verifikasi</span>
                    @elseif($d->status == 'diproses')
                        <span class="badge badge-proses">Dalam Proses</span>
                    @elseif($d->status == 'selesai')
                        <span class="badge badge-selesai">Selesai</span>
                    @else
                        <span class="badge badge-ditolak">Ditolak</span>
                    @endif
                </div>

                <h5 class="fw-bold">{{ $d->jenis_surat }}</h5>

                <p class="mb-1">Nama: {{ $d->nama }}</p>
                <p class="text-muted">Tanggal: {{ $d->created_at->format('d F Y') }}</p>

            </div>

            {{-- KANAN --}}
            <div class="col-md-5">
                <div class="keterangan-box">

                    <b>Keterangan:</b>

                    @if($d->status == 'pending')
                        <p>Sedang dalam proses verifikasi data</p>
                    @elseif($d->status == 'diproses')
                        <p>Pengajuan diterima, sedang diproses</p>
                    @elseif($d->status == 'selesai')
                        <p>Dokumen sudah selesai dan bisa diambil</p>
                    @else
                        <p>Pengajuan ditolak, periksa kembali data</p>
                    @endif

                </div>
            </div>

        </div>

    </div>
    @endforeach

    {{-- KETERANGAN --}}
    <div class="row">

        <div class="col-md-6">

            <div class="status-item">
                <span class="icon">🟡</span>
                <div>
                    <b>Dalam Proses</b>
                    <p>Pengajuan diterima dan sedang diproses</p>
                </div>
            </div>

            <div class="status-item">
                <span class="icon">🟢</span>
                <div>
                    <b>Selesai</b>
                    <p>Dokumen siap diambil di Kantor Desa</p>
                </div>
            </div>

        </div>

        <div class="col-md-6">

            <div class="status-item">
                <span class="icon">🔵</span>
                <div>
                    <b>Sedang Verifikasi</b>
                    <p>Dalam tahap verifikasi data</p>
                </div>
            </div>

            <div class="status-item">
                <span class="icon">🔴</span>
                <div>
                    <b>Ditolak</b>
                    <p>Pengajuan ditolak, silakan cek keterangan</p>
                </div>
            </div>

        </div>

    </div>

</div>

</x-app-layout>