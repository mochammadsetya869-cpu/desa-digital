@section('title', 'Pengajuan Surat')
<x-app-layout>

<div class="pengajuan-page">

    {{-- BACK --}}
    <a href="/dashboard" class="kembali-link">
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

            <option value="KTP">Surat Pengantar KTP / KK</option>

            <option value="SKTM">Surat Keterangan Tidak Mampu (SKTM)</option>

            <option value="Kematian">Surat Keterangan Kematian</option>

            <option value="Slip Gaji">Surat Keterangan Penghasilan</option>

            <option value="Usaha">Surat Keterangan Usaha (SKU)</option>

            <option value="Domisili">Surat Keterangan Domisili (SKD)</option>
            
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
                maxlength="16"
                pattern="[0-9]{16}"
                oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                required
            >

            @error('nik')
                <small style="color:red;display:block;margin-top:5px;">
                    {{ $message }}
                </small>
            @enderror

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
            {{-- KTP / KK --}}
            @if($jenis == 'KTP' || $jenis == 'KK')

            <label>Nomor KK *</label> <input type="text" name="nomor_kk">

            <label>Status Perkawinan *</label> <select name="status_perkawinan"> <option value="">Pilih Status</option> <option value="Belum Kawin">Belum Kawin</option> <option value="Kawin">Kawin</option> <option value="Cerai Hidup">Cerai Hidup</option> <option value="Cerai Mati">Cerai Mati</option> </select>

            <label>Alasan Pengajuan *</label> <select name="alasan_pengajuan"> <option value="">Pilih Alasan</option> <option value="Baru">Baru / Pemula</option> <option value="Hilang">Hilang</option> <option value="Rusak">Rusak</option> <option value="Perubahan Data">Perubahan Data</option> <option value="Pindah Datang">Pindah Datang</option> </select>

            @endif

            {{-- SKTM --}}
            @if($jenis == 'SKTM')

            <label>Status Perkawinan *</label> <select name="status_perkawinan"> <option value="">Pilih Status</option> <option value="Kawin">Kawin</option> <option value="Duda">Duda</option> <option value="Janda">Janda</option> </select>

            <label>Nama Anak *</label> <input type="text" name="nama_anak">

            <label>NIK Anak *</label> <input type="text" name="nik_anak">

            <label>Sekolah / Universitas *</label> <input type="text" name="sekolah_tujuan">

            <label>Tujuan Penggunaan *</label> <input type="text" name="tujuan_penggunaan">

            @endif

            {{-- SURAT KEMATIAN --}}
            @if($jenis == 'Kematian')

            <label>Hubungan Dengan Almarhum *</label> <select name="hubungan_pelapor"> <option value="">Pilih Hubungan</option> <option value="Suami">Suami</option> <option value="Istri">Istri</option> <option value="Anak">Anak</option> <option value="Saudara">Saudara</option> <option value="Ketua RT">Ketua RT</option> </select>

            <label>Nama Almarhum *</label> <input type="text" name="nama_almarhum">

            <label>NIK Almarhum *</label> <input type="text" name="nik_almarhum">

            <label>Tempat Meninggal *</label> <input type="text" name="tempat_meninggal">

            <label>Penyebab Meninggal *</label> <input type="text" name="penyebab_meninggal">

            @endif

            {{-- PENGHASILAN --}}
            @if($jenis == 'Slip Gaji')

            <label>Penghasilan Rata-rata per Bulan *</label> <input type="text" name="penghasilan_bulanan">

            <label>Tujuan Penggunaan *</label> <input type="text" name="tujuan_penggunaan">

            @endif

            {{-- USAHA --}}
            @if($jenis == 'Usaha')

            <label>Nama Usaha *</label> <input type="text" name="nama_usaha">

            <label>Jenis Usaha *</label> <input type="text" name="jenis_usaha">

            <label>Alamat Usaha *</label>

            <textarea name="alamat_usaha"></textarea>

            <label>Tahun Berdiri *</label> <input type="text" name="tahun_berdiri">

            @endif

            {{-- DOMISILI --}}
            @if($jenis == 'Domisili')

            <label>Alamat Asal *</label>

            <textarea name="alamat_asal"></textarea>

            <label>Alamat Domisili Sekarang *</label>

            <textarea name="alamat_domisili"></textarea>

            <label>Tanggal Mulai Menetap *</label> <input type="date" name="tanggal_mulai_menetap">

            @endif


            {{-- BUTTON --}}
            <div class="submit-wrapper">

                <button type="submit"
                        class="btn-simpan">
                    Ajukan Pengajuan
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