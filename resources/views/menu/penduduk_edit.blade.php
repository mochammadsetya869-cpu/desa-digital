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

        <input type="date" name="tanggal_lahir" value="{{ $p->tanggal_lahir }}" class="form-control mb-2">

        <input type="text" name="pekerjaan" value="{{ $p->pekerjaan }}" class="form-control mb-2">

        <button class="btn btn-primary">Update</button>

    </form>

</div>

</x-app-layout>