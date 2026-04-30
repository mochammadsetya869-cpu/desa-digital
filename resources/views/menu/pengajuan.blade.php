<x-app-layout>

<a href="/dashboard" class="btn btn-outline-primary mb-3">
    ← Kembali ke Beranda
</a>

<div class="container mt-4" style="max-width:600px;">

    <div class="text-center mb-4">
        <h2>Pengajuan Surat</h2>
        <p>Ajukan permohonan pembuatan dokumen kependudukan</p>
    </div>

    {{-- STEP 1: PILIH JENIS --}}
    <div class="card p-4 shadow-sm">

        <form method="GET" action="/pengajuan">
            <label>Jenis Dokumen *</label>

            <select name="jenis" class="form-control" onchange="this.form.submit()">
               <option value="">Pilih jenis dokumen</option> 
               <option value="KTP">Kartu Tanda Penduduk (KTP)</option> 
               <option value="KK">Kartu Keluarga (KK)</option> 
               <option value="SKTM">Surat Keterangan Tidak Mampu</option> 
               <option value="Slip Gaji">Surat Penghasilan / Slip Gaji</option> 
               <option value="Kematian">Akta Kematian</option> 
               <option value="Usaha">Surat Keterangan Usaha</option> 
               <option value="Domisili">Surat Domisili</option>
            </select>
        </form>

    </div>

    {{-- STEP 2: FORM MUNCUL --}}
    @if($jenis)
    <div class="card p-4 shadow-sm mt-4">

        <h5>Form {{ $jenis }}</h5>

        <form action="/pengajuan/store" method="POST">
            @csrf

            <input type="hidden" name="jenis_surat" value="{{ $jenis }}">

           <div class="mb-3">
                <label>NIK *</label>
                <input type="text" name="nik" class="form-control" placeholder="Masukkan 16 digit NIK" required>
            </div>

            <div class="mb-3">
                <label>Nama Lengkap *</label>
                <input type="text" name="nama" class="form-control" placeholder="Nama lengkap sesuai KTP" required>
            </div>

            <div class="row">
                <div class="col-md-6 mb-3">
                    <label>Tempat Lahir *</label>
                    <input type="text" name="tempat_lahir" class="form-control" placeholder="Contoh: Indramayu" required>
                </div>

                <div class="col-md-6 mb-3">
                    <label>Tanggal Lahir *</label>
                    <input type="date" name="tanggal_lahir" class="form-control" required>
                </div>
            </div>

            <div class="mb-3">
                <label>Jenis Kelamin *</label>
                <select name="jenis_kelamin" class="form-control" required>
                    <option value="">Pilih jenis kelamin</option>
                    <option value="L">Laki-laki</option>
                    <option value="P">Perempuan</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Alamat Lengkap *</label>
                <textarea name="alamat" class="form-control" rows="3" placeholder="RT/RW, Dusun, dll" required></textarea>
            </div>

            <div class="mb-3">
                <label>Agama *</label>
                <select name="agama" class="form-control" required>
                    <option value="">Pilih agama</option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Katolik">Katolik</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                </select>
            </div>

            <div class="mb-3">
                <label>Pekerjaan *</label>
                <input type="text" name="pekerjaan" class="form-control" placeholder="Contoh: Petani, Buruh, Mahasiswa" required>
            </div>

            {{-- ================== KETERANGAN TAMBAHAN ================== --}}
            @if($jenis == 'SKTM' || $jenis == 'Usaha')
            <div class="mb-3">
                <label>Keterangan Tambahan</label>
                <textarea name="keterangan" class="form-control"></textarea>
            </div>
            @endif

            {{-- ================== BUTTON ================== --}}
            <div class="d-flex justify-content-between mt-4">
                <a href="/data-penduduk" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Ajukan Permohonan</button>
            </div>
        </form>

    </div>
    @endif

    <div class="card p-3 mt-4 bg-light">
        <h6>Informasi Penting</h6>
        <ul style="font-size:14px;">
            <li>Pastikan data sesuai dokumen asli</li>
            <li>Proses 3-5 hari kerja</li>
            <li>Status bisa dilihat di menu Status</li>
            <li>Ambil di kantor desa setelah selesai</li>
        </ul>
    </div>

</div>

</x-app-layout>