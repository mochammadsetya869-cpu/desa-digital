<x-app-layout>

<div class="container mt-4">

    <h3>Edit Penduduk</h3>

    <form action="/penduduk/update/{{ $p->id }}" method="POST">
        @csrf

        <input type="text" name="nama" value="{{ $p->nama }}" class="form-control mb-2">

        <select name="jenis_kelamin" class="form-control mb-2">
            <option value="L" {{ $p->jenis_kelamin == 'L' ? 'selected' : '' }}>L</option>
            <option value="P" {{ $p->jenis_kelamin == 'P' ? 'selected' : '' }}>P</option>
        </select>

        <input type="date" name="tanggal_lahir" value="{{ $p->tanggal_lahir }}" class="form-control mb-2">
        <input type="text" name="pekerjaan" value="{{ $p->pekerjaan }}" class="form-control mb-2">

        <button class="btn btn-primary">Update</button>
    </form>

</div>

</x-app-layout>