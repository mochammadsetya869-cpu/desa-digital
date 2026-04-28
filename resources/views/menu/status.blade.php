<x-app-layout>

<a href="/dashboard" class="btn btn-outline-primary mb-3">
        ← Kembali ke Beranda
    </a>
    
<div class="container mt-4">

    <h3>Status Pengajuan</h3>

    <table class="table mt-3">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Surat</th>
                <th>Keterangan</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>
            @foreach($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->jenis_surat }}</td>
                <td>{{ $d->keterangan }}</td>

                <td>
                    @if($d->status == 'pending')
                        <span class="badge bg-warning">Pending</span>
                    @elseif($d->status == 'diproses')
                        <span class="badge bg-primary">Diproses</span>
                    @else
                        <span class="badge bg-success">Selesai</span>
                    @endif
                </td>

            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</x-app-layout>