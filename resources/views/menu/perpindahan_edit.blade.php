<x-app-layout>

<div class="detail-container">

    <h1 class="detail-title">
        Edit Perpindahan
    </h1>

    <form action="/perpindahan/update/{{ $data->id }}"
        method="POST">

        @csrf
        @method('PUT')

        <input type="text"
            name="nama"
            value="{{ $data->nama }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <input type="text"
            name="nik"
            value="{{ $data->nik }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <input type="text"
            name="kabupaten_tujuan"
            value="{{ $data->kabupaten_tujuan }}"
            style="width:100%;padding:12px;margin-bottom:15px;">

        <button type="submit">
            Simpan Perubahan
        </button>

    </form>

</div>

</x-app-layout>