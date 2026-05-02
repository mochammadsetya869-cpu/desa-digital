<x-app-layout>
    <a href="/dashboard">← Kembali ke Beranda</a>

    <div class="container mt-5">

    <h1>Perpindahan Penduduk</h1>

        <form action="/perpindahan-penduduk/store" method="POST">
            @csrf

            <div class="mb-3">
                <label>NIK</label>
                <input type="text" name="nik" class="form-control">
            </div>

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jenis Kelamin</label>
                <select name="jenis_kelamin" class="form-control">
                    <option>L</option>
                    <option>P</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" class="form-control">
            </div>

            <div class="mb-3">
                <label>Alamat Asal</label>
                <textarea name="alamat_asal" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Alamat Tujuan</label>
                <textarea name="alamat_tujuan" class="form-control"></textarea>
            </div>

            <div class="mb-3">
                <label>Provinsi Tujuan</label>
                <input type="text" name="provinsi_tujuan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kabupaten Tujuan</label>
                <input type="text" name="kabupaten_tujuan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Kecamatan Tujuan</label>
                <input type="text" name="kecamatan_tujuan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Desa Tujuan</label>
                <input type="text" name="desa_tujuan" class="form-control">
            </div>

            <div class="mb-3">
                <label>Alasan Pindah</label>
                <input type="text" name="alasan_pindah" class="form-control">
            </div>

            <div class="mb-3">
                <label>Jumlah Anggota</label>
                <input type="number" name="jumlah_anggota" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">
                Ajukan
            </button>

        </form>

    </div>

</x-app-layout>