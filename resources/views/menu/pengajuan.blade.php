<x-app-layout>

<div class="pengajuan-page">

    {{-- BACK --}}
    <a href="/dashboard" class="btn btn-outline-primary mb-4">
        ← Kembali ke Beranda
    </a>

    {{-- HEADER --}}
    <div class="pengajuan-header">

        <div class="pengajuan-icon">
            📄
        </div>

        <h1>Pengajuan Surat</h1>

        <p>
            Ajukan permohonan pembuatan dokumen kependudukan
        </p>

    </div>

    {{-- PILIH JENIS --}}
    <div class="pengajuan-card">

        <form method="GET" action="/pengajuan">

            <label>Jenis Dokumen *</label>

            <select name="jenis" onchange="this.form.submit()">

                <option value="">Pilih jenis dokumen yang akan diajukan</option>

                <option value="KTP">Kartu Tanda Penduduk (KTP)</option>

                <option value="KK">Kartu Keluarga (KK)</option>

                <option value="SKTM">Surat Keterangan Tidak Mampu (SKTM)</option>

                <option value="Slip Gaji">Surat Keterangan Penghasilan / Slip Gaji</option>

                <option value="Kematian">Akte Kematian</option>

                <option value="Usaha">Surat Keterangan Usaha</option>

                <option value="Domisili">Surat Keterangan Domisili</option>

            </select>

        </form>

    </div>

    {{-- FORM --}}
    @if($jenis)

    <div class="pengajuan-card">

        <form action="/pengajuan/store" method="POST">

            @csrf

            <input type="hidden" name="jenis_surat" value="{{ $jenis }}">

            <h3 class="form-title">
                Data Pemohon
            </h3>

            {{-- NIK --}}
            <label>NIK (Nomor Induk Kependudukan) *</label>

            <input
                type="text"
                name="nik"
                placeholder="Masukkan 16 digit NIK"
                required
            >

            {{-- NAMA --}}
            <label>Nama Lengkap *</label>

            <input
                type="text"
                name="nama"
                placeholder="Masukkan nama lengkap sesuai KTP"
                required
            >

            {{-- GRID --}}
            <div class="form-grid">

                <div>
                    <label>Tempat Lahir *</label>

                    <input
                        type="text"
                        name="tempat_lahir"
                        placeholder="Contoh: Indramayu"
                        required
                    >
                </div>

                <div>
                    <label>Tanggal Lahir *</label>

                    <input
                        type="date"
                        name="tanggal_lahir"
                        required
                    >
                </div>

            </div>

            {{-- JK --}}
            <label>Jenis Kelamin *</label>

            <select name="jenis_kelamin" required>

                <option value="">Pilih jenis kelamin</option>

                <option value="L">Laki-laki</option>

                <option value="P">Perempuan</option>

            </select>

            {{-- ALAMAT --}}
            <label>Alamat Lengkap *</label>

            <textarea
                name="alamat"
                rows="4"
                placeholder="Masukkan alamat lengkap (RT/RW, Dusun, dll)"
                required
            ></textarea>

            {{-- AGAMA --}}
            <label>Agama *</label>

            <select name="agama" required>

                <option value="">Pilih agama</option>

                <option value="Islam">Islam</option>

                <option value="Kristen">Kristen</option>

                <option value="Katolik">Katolik</option>

                <option value="Hindu">Hindu</option>

                <option value="Budha">Budha</option>

            </select>

            {{-- PEKERJAAN --}}
            <label>Pekerjaan *</label>

            <input
                type="text"
                name="pekerjaan"
                placeholder="Contoh: Petani, Wiraswasta, PNS, dll"
                required
            >

            {{-- KETERANGAN --}}
            @if($jenis == 'SKTM' || $jenis == 'Usaha')

            <label>Keterangan Tambahan</label>

            <textarea
                name="keterangan"
                rows="4"
                placeholder="Informasi tambahan jika diperlukan"
            ></textarea>

            @endif

            {{-- BUTTON --}}
            <div class="submit-wrapper">

                <button type="submit" class="btn-kirim">
                    Ajukan Permohonan
                </button>

                <a href="/dashboard" class="btn-batal">
                    Batal
                </a>

            </div>

        </form>

    </div>

    @endif

    {{-- INFO --}}
    <div class="info-card">

        <h3>Informasi Penting</h3>

        <ul>

            <li>
                Pastikan semua data yang dimasukkan sesuai dengan dokumen asli
            </li>

            <li>
                Proses verifikasi membutuhkan waktu 3-5 hari kerja
            </li>

            <li>
                Status pengajuan dapat dilihat di menu "Status Pengajuan"
            </li>

            <li>
                Dokumen dapat diambil di Kantor Desa setelah proses selesai
            </li>

        </ul>

    </div>

</div>

</x-app-layout>