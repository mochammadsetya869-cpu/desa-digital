<x-app-layout>

<div class="pengajuan-admin-page">

    <a href="/dashboard" class="btn btn-outline-primary mb-4">
        ← Kembali ke Beranda
    </a>

    <div class="admin-header">
        <h1>Data Pengajuan</h1>
        <p>Kelola pengajuan surat masyarakat</p>
    </div>

    <div class="admin-card">

        <table class="pengajuan-table">

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Jenis Surat</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($data as $p)

                <tr>

                    <td>{{ $p->nama }}</td>

                    <td>{{ $p->nik }}</td>

                    <td>{{ $p->jenis_surat }}</td>

                    <td>

                        @if($p->status == 'pending')
                            <span class="status pending">
                                Pending
                            </span>

                        @elseif($p->status == 'diproses')
                            <span class="status proses">
                                Diproses
                            </span>

                        @elseif($p->status == 'selesai')
                            <span class="status selesai">
                                Selesai
                            </span>

                        @elseif($p->status == 'ditolak')
                            <span class="status ditolak">
                                Ditolak
                            </span>
                        @endif

                    </td>

                    <td class="aksi">

                        @if($p->status == 'pending')

                            <a href="/pengajuan/setuju/{{ $p->id }}" class="btn-setuju">
                                Setujui
                            </a>

                            <a href="/pengajuan/tolak/{{ $p->id }}" class="btn-tolak">
                                Tolak
                            </a>

                        @elseif($p->status == 'diproses')

                            <a href="/pengajuan/selesai/{{ $p->id }}" class="btn-selesai">
                                Selesai
                            </a>

                        @elseif($p->status == 'selesai')

                            <span class="done-text">
                                Sudah Selesai
                            </span>

                        @elseif($p->status == 'ditolak')

                            <span class="reject-text">
                                Ditolak
                            </span>

                        @endif

                    </td>

                </tr>

                @endforeach

            </tbody>

        </table>

    </div>

</div>

</x-app-layout>