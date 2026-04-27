<x-app-layout>

<div class="container mt-4">

    <a href="/data-penduduk" class="btn btn-outline-primary mb-3">
        ← Kembali
    </a>

    <h3>Tambah Penduduk</h3>

    <form action="/penduduk/store" method="POST">
        @csrf

        <input type="text" name="nik" class="form-control mb-2" placeholder="NIK" required>

        <input type="text" name="nama" class="form-control mb-2" placeholder="Nama" required>

        <select name="jenis_kelamin" class="form-control mb-2">
            <option value="L">Laki-laki</option>
            <option value="P">Perempuan</option>
        </select>

        <input type="date" name="tanggal_lahir" class="form-control mb-2" required>

        {{-- PENDIDIKAN --}}
        <select name="pendidikan" class="form-control mb-2">
            <option value="">-- Pilih Pendidikan --</option>
            <option value="SD">SD</option>
            <option value="SMP">SMP</option>
            <option value="SMA">SMA</option>
            <option value="Diploma">Diploma</option>
        </select>

        {{-- AGAMA --}}
        <select name="agama" class="form-control mb-3">
            <option value="">-- Pilih Agama --</option>
            <option value="Islam">Islam</option>
            <option value="Kristen">Kristen</option>
            <option value="Katolik">Katolik</option>
            <option value="Hindu">Hindu</option>
            <option value="Budha">Budha</option>
        </select>

        <select name="pekerjaan" class="form-control">
            <option>Petani</option>
            <option>Buruh</option>
            <option>Wiraswasta</option>
            <option>PNS/TNI/Polri</option>
            <option>Pensiunan</option>
            <option>Belum/Tidak Bekerja</option>
        </select>

        <button class="btn btn-success">Simpan</button>

    </form>

</div>

</x-app-layout>