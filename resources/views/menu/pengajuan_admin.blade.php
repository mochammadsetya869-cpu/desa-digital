<x-app-layout>

<a href="/dashboard" class="btn btn-outline-primary mb-3">
        ← Kembali ke Beranda
    </a>


<div class="container mt-4">

    <h3>Data Pengajuan</h3>

    <table class="table mt-3">
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
                <td>{{ $p->status }}</td>

                <td>
                    <a href="/pengajuan/setuju/{{ $p->id }}" class="btn btn-success btn-sm">Setujui</a>
                    <a href="/pengajuan/tolak/{{ $p->id }}" class="btn btn-danger btn-sm">Tolak</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>

</div>

</x-app-layout>