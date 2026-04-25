<x-app-layout>

<div class="container mt-4">

    <h3>Status Pengajuan Saya</h3>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Jenis Surat</th>
                <th>Nama</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @forelse($data as $p)
            <tr>
                <td>{{ $p->jenis_surat }}</td>
                <td>{{ $p->nama }}</td>

                <td>
                    @if($p->status == 'Diproses')
                        <span class="badge bg-warning">Diproses</span>
                    @elseif($p->status == 'Disetujui')
                        <span class="badge bg-success">Disetujui</span>
                    @else
                        <span class="badge bg-danger">Ditolak</span>
                    @endif
                </td>

            </tr>
            @empty
            <tr>
                <td colspan="3">Belum ada pengajuan</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

</x-app-layout>