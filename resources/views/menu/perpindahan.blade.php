@section('title', 'Perpindahan Penduduk')
<x-app-layout>

<div class="perpindahan-page">

    <a href="/dashboard" class="kembali-link">
        ← Kembali ke Beranda
    </a>

    <div class="container">

        <div class="icon-perpindahan">
            ↻
        </div>

        <h1>Perpindahan Penduduk</h1>

        <p class="subtitle">
            Formulir permohonan pindah domisili
        </p>

        <div class="form-card">

            <form action="/perpindahan/store" method="POST">
                @csrf

                <div class="section-title">
                    Data Pemohon
                </div>

                <div class="mb-4">
                    <label>NIK (Nomor Induk Kependudukan) *</label>
                    <input
                        type="text"
                        name="nik"
                        placeholder="Masukkan 16 digit NIK"
                        maxlength="16"
                        pattern="[0-9]{16}"
                        oninput="this.value=this.value.replace(/[^0-9]/g,'')"
                        required>

                    @error('nik')
                        <small style="color:red;display:block;margin-top:5px;">
                            {{ $message }}
                        </small>
                    @enderror
                </div>

                <div class="mb-4">
                    <label>Nama Lengkap (Kepala Keluarga) *</label>
                    <input
                        type="text"
                        name="nama"
                        placeholder="Masukkan nama lengkap sesuai KTP">
                </div>

                <div class="grid-2">

                    <div class="mb-4">
                        <label>Jenis Kelamin *</label>

                        <select name="jenis_kelamin">
                            <option value="">Pilih jenis kelamin</option>
                            <option value="L">Laki-laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>

                    <div class="mb-4">
                        <label>Tanggal Lahir *</label>

                        <input
                            type="date"
                            name="tanggal_lahir">
                    </div>

                </div>

                <div class="mb-4">
                    <label>Jumlah Anggota Keluarga yang Pindah *</label>

                    <input
                        type="number"
                        name="jumlah_anggota"
                        placeholder="Contoh: 4">
                </div>

                <hr>

                <div class="section-title mt-5">
                    Alamat Asal
                </div>

                <div class="mb-4">
                    <label>Alamat Lengkap Saat Ini *</label>

                    <textarea
                        name="alamat_asal"
                        placeholder="RT/RW, Dusun, Desa Leuwigede, Kec. Widasari, Kab. Indramayu"></textarea>
                </div>

                <hr>

                <div class="section-title mt-5">
                    Alamat Tujuan Pindah
                </div>

                <div class="mb-4">
                    <label>Alamat Lengkap Tujuan *</label>

                    <textarea
                        name="alamat_tujuan"
                        placeholder="RT/RW, Dusun, Jalan, dll"></textarea>
                </div>

                <div class="grid-2">

                    <div class="mb-4">
                        <label>Provinsi Tujuan *</label>

                        <input
                            type="text"
                            name="provinsi_tujuan"
                            placeholder="Contoh: Jawa Barat">
                    </div>

                    <div class="mb-4">
                        <label>Kabupaten/Kota Tujuan *</label>

                        <input
                            type="text"
                            name="kabupaten_tujuan"
                            placeholder="Contoh: Indramayu">
                    </div>

                </div>

                <div class="grid-2">

                    <div class="mb-4">
                        <label>Kecamatan Tujuan *</label>

                        <input
                            type="text"
                            name="kecamatan_tujuan"
                            placeholder="Contoh: Widasari">
                    </div>

                    <div class="mb-4">
                        <label>Desa/Kelurahan Tujuan *</label>

                        <input
                            type="text"
                            name="desa_tujuan"
                            placeholder="Contoh: Leuwigede">
                    </div>

                </div>

                <div class="mb-4">
                    <label>Alasan Pindah *</label>

                    <select name="alasan_pindah">

                        <option value="">
                            Pilih alasan pindah
                        </option>

                        <option value="Pekerjaan">
                            Pekerjaan
                        </option>

                        <option value="Pendidikan">
                            Pendidikan
                        </option>

                        <option value="Mengikuti Keluarga">
                            Mengikuti Keluarga
                        </option>

                        <option value="Lainnya">
                            Lainnya
                        </option>

                    </select>
                </div>

                <div class="btn-area">

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

        <div class="dokumen-box">

            <h3>Dokumen yang Perlu Disiapkan</h3>

            <ul>
                <li>Fotocopy Kartu Keluarga (KK)</li>
                <li>Fotocopy KTP semua anggota keluarga yang pindah</li>
                <li>Surat Pengantar RT/RW</li>
                <li>Surat Keterangan Pindah dari desa asal</li>
                <li>Dokumen pendukung lainnya (jika diperlukan)</li>
            </ul>

            <p class="catatan">
                <strong>Catatan:</strong>
                Proses verifikasi membutuhkan waktu 5-7 hari kerja
            </p>

        </div>

    </div>

</div>

</x-app-layout>