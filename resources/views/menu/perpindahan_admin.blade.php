<x-app-layout>

<div class="pengajuan-admin-page">

    <a href="/dashboard" class="kembali-link">
        ← Kembali ke Beranda
    </a>

    <div class="admin-header">
        <h1>Data Perpindahan Penduduk</h1>
        <p>Kelola permohonan perpindahan warga</p>
    </div>

    <div class="admin-card">

        <table class="pengajuan-table">

            <thead>
                <tr>
                    <th>Nama</th>
                    <th>NIK</th>
                    <th>Tujuan</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>

                @foreach($data as $p)

                <tr>

                    <td>{{ $p->nama }}</td>

                    <td>{{ $p->nik }}</td>

                    <td>{{ $p->kabupaten_tujuan }}</td>

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

                            <form action="{{ route('perpindahan.setujui', $p->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf

                                <button class="btn-setuju">
                                    Setujui
                                </button>
                            </form>

                            <form action="{{ route('perpindahan.tolak', $p->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf

                                <button class="btn-tolak">
                                    Tolak
                                </button>
                            </form>

                        @elseif($p->status == 'diproses')

                            <form action="{{ route('perpindahan.selesai', $p->id) }}"
                                  method="POST"
                                  style="display:inline;">
                                @csrf

                                <button class="btn-selesai">
                                    Selesai
                                </button>
                            </form>

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