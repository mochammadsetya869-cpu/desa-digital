<x-app-layout>

<div class="container mt-4">

    <a href="/data-penduduk" class="btn btn-secondary mb-3">
        ← Kembali
    </a>

    <h3>Edit Penduduk</h3>

    <form action="/penduduk/update/{{ $p->id }}" method="POST">
        @csrf

        <input type="text" name="nik" value="{{ $p->nik }}" class="form-control mb-2" required>

        <input type="text" name="nama" value="{{ $p->nama }}" class="form-control mb-2" required>

        <select name="jenis_kelamin" class="form-control mb-2">
            <option value="L" {{ $p->jenis_kelamin == 'L' ? 'selected' : '' }}>Laki-laki</option>
            <option value="P" {{ $p->jenis_kelamin == 'P' ? 'selected' : '' }}>Perempuan</option>
        </select>

        <select name="pendidikan" class="form-control mb-2">
            <option {{ $p->pendidikan == 'Tidak' ? 'selected' : '' }}>Tidak</option>
            <option {{ $p->pendidikan == 'SD' ? 'selected' : '' }}>SD</option>
            <option {{ $p->pendidikan == 'SMP' ? 'selected' : '' }}>SMP</option>
            <option {{ $p->pendidikan == 'SMA' ? 'selected' : '' }}>SMA</option>
            <option {{ $p->pendidikan == 'Diploma' ? 'selected' : '' }}>Diploma</option>
            <option {{ $p->pendidikan == 'Sarjana' ? 'selected' : '' }}>Sarjana</option>
        </select>

        <select name="agama" class="form-control mb-2">
            <option {{ $p->agama == 'Islam' ? 'selected' : '' }}>Islam</option>
            <option {{ $p->agama == 'Kristen' ? 'selected' : '' }}>Kristen</option>
            <option {{ $p->agama == 'Katolik' ? 'selected' : '' }}>Katolik</option>
            <option {{ $p->agama == 'Hindu' ? 'selected' : '' }}>Hindu</option>
            <option {{ $p->agama == 'Budha' ? 'selected' : '' }}>Budha</option>
        </select>

        <select name="pekerjaan" class="form-control">
            <option>Petani</option>
            <option>Buruh</option>
            <option>Wiraswasta</option>
            <option>PNS/TNI/Polri</option>
            <option>Pensiunan</option>
            <option>Belum/Tidak Bekerja</option>
        </select>

        <button class="btn btn-primary">Update</button>

    </form>

</div>

</x-app-layout>