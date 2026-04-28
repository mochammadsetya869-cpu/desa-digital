<x-app-layout>

    <a href="/dashboard" class="btn btn-outline-primary mb-3">
        ← Kembali ke Beranda
    </a>

<div class="container mt-4">

    <!-- JUDUL -->
    <div class="text-center mb-4">
        <h2>Pengajuan Surat</h2>
        <p>Ajukan permohonan pembuatan dokumen kependudukan</p>
    </div>

    <!-- FORM -->
    <div class="card p-4 shadow-sm">

        <form action="/pengajuan/store" method="POST">
            @csrf

            {{-- ================== JENIS SURAT ================== --}}
            <div class="mb-3">
                <label>Jenis Dokumen *</label>
                <select name="jenis_surat" class="form-control" required>
                    <option value="">Pilih jenis dokumen</option>
                    <option value="KTP">Kartu Tanda Penduduk (KTP)</option>
                    <option value="KK">Kartu Keluarga (KK)</option>
                    <option value="SKTM">Surat Keterangan Tidak Mampu</option>
                    <option value="Slip Gaji">Surat Penghasilan / Slip Gaji</option>
                    <option value="Kematian">Akta Kematian</option>
                    <option value="Usaha">Surat Keterangan Usaha</option>
                    <option value="Domisili">Surat Domisili</option>
                </select>
            </div>

            <hr>

            {{-- ================== DATA PEMOHON ================== --}}
            <h5>Data Pemohon</h5>

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
            <div class="mb-3" id="keteranganBox" style="display:none;">
                <label>Keterangan Tambahan</label>
                <textarea name="keterangan" class="form-control" rows="3"></textarea>
            </div>

            {{-- ================== BUTTON ================== --}}
            <div class="d-flex justify-content-between mt-4">
                <a href="/data-penduduk" class="btn btn-secondary">Batal</a>
                <button type="submit" class="btn btn-primary">Ajukan Permohonan</button>
            </div>

        </form>

    </div>

</div>

{{-- ================== SCRIPT (BIAR DINAMIS) ================== --}}
<script>
    const jenis = document.querySelector('[name="jenis_surat"]');
    const ketBox = document.getElementById('keteranganBox');

    jenis.addEventListener('change', function() {
        if(this.value === 'SKTM' || this.value === 'Usaha'){
            ketBox.style.display = 'block';
        } else {
            ketBox.style.display = 'none';
        }
    });
</script>

</x-app-layout>