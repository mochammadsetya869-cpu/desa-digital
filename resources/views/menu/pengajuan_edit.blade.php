@section('title', 'Edit Pengajuan Surat')
<x-app-layout>

<div class="profil-container">

    <a href="/status" class="kembali-link">
        ← Kembali ke Status
    </a>

    <div class="edit-card">

        <div class="edit-header">
            <h1>Edit Pengajuan Surat</h1>
            <p>Perbaiki data yang diminta oleh admin</p>
        </div>

        <form id="formEditPengajuan"
            action="/pengajuan/update/{{ $data->id }}"
            method="POST">

            @csrf
            @method('PUT')

            <div class="form-group">
                <label>Nama Lengkap</label>
                <input type="text"
                       class="form-control"
                       name="nama"
                       value="{{ $data->nama }}">
            </div>

            <div class="form-group">
                <label>NIK</label>
                <input type="text"
                       class="form-control"
                       name="nik"
                       value="{{ $data->nik }}">
            </div>

            <div class="form-group">
                <label>Jenis Surat</label>
                <input type="text"
                       class="form-control"
                       name="jenis_surat"
                       value="{{ $data->jenis_surat }}">
            </div>

            <div class="form-group">
                <label>Tempat Lahir</label>
                <input type="text"
                       class="form-control"
                       name="tempat_lahir"
                       value="{{ $data->tempat_lahir }}">
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date"
                       class="form-control"
                       name="tanggal_lahir"
                       value="{{ $data->tanggal_lahir }}">
            </div>

            <div class="form-group">
                <label>Jenis Kelamin</label>
                <input type="text"
                       class="form-control"
                       name="jenis_kelamin"
                       value="{{ $data->jenis_kelamin }}">
            </div>

            <div class="form-group">
                <label>Agama</label>
                <input type="text"
                       class="form-control"
                       name="agama"
                       value="{{ $data->agama }}">
            </div>

            <div class="form-group">
                <label>Pekerjaan</label>
                <input type="text"
                       class="form-control"
                       name="pekerjaan"
                       value="{{ $data->pekerjaan }}">
            </div>

            <div class="form-group">
                <label>Alamat</label>
                <textarea class="form-control"
                          name="alamat">{{ $data->alamat }}</textarea>
            </div>

            <div class="form-group">
                <label>Keterangan</label>
                <textarea class="form-control"
                          name="keterangan">{{ $data->keterangan }}</textarea>
            </div>

            @if($data->jenis_surat == 'KTP')

            <div class="form-group">
                <label>Nomor KK</label>
                <input type="text"
                    class="form-control"
                    name="nomor_kk"
                    value="{{ $data->nomor_kk }}">
            </div>

            <div class="form-group">
                <label>Status Perkawinan</label>
                <input type="text"
                    class="form-control"
                    name="status_perkawinan"
                    value="{{ $data->status_perkawinan }}">
            </div>

            <div class="form-group">
                <label>Alasan Pengajuan</label>
                <input type="text"
                    class="form-control"
                    name="alasan_pengajuan"
                    value="{{ $data->alasan_pengajuan }}">
            </div>

            @endif
            
            @if($data->jenis_surat == 'SKTM')

            <div class="form-group">
                <label>Nama Anak</label>
                <input type="text"
                    class="form-control"
                    name="nama_anak"
                    value="{{ $data->nama_anak }}">
            </div>

            <div class="form-group">
                <label>NIK Anak</label>
                <input type="text"
                    class="form-control"
                    name="nik_anak"
                    value="{{ $data->nik_anak }}">
            </div>

            <div class="form-group">
                <label>Sekolah / Universitas</label>
                <input type="text"
                    class="form-control"
                    name="sekolah_tujuan"
                    value="{{ $data->sekolah_tujuan }}">
            </div>

            <div class="form-group">
                <label>Tujuan Penggunaan</label>
                <input type="text"
                    class="form-control"
                    name="tujuan_penggunaan"
                    value="{{ $data->tujuan_penggunaan }}">
            </div>

            @endif

            @if($data->jenis_surat == 'Kematian')

            <div class="form-group">
                <label>Hubungan Pelapor</label>
                <input type="text"
                    class="form-control"
                    name="hubungan_pelapor"
                    value="{{ $data->hubungan_pelapor }}">
            </div>

            <div class="form-group">
                <label>Nama Almarhum</label>
                <input type="text"
                    class="form-control"
                    name="nama_almarhum"
                    value="{{ $data->nama_almarhum }}">
            </div>

            <div class="form-group">
                <label>NIK Almarhum</label>
                <input type="text"
                    class="form-control"
                    name="nik_almarhum"
                    value="{{ $data->nik_almarhum }}">
            </div>

            <div class="form-group">
                <label>Tempat Meninggal</label>
                <input type="text"
                    class="form-control"
                    name="tempat_meninggal"
                    value="{{ $data->tempat_meninggal }}">
            </div>

            <div class="form-group">
                <label>Penyebab Meninggal</label>
                <input type="text"
                    class="form-control"
                    name="penyebab_meninggal"
                    value="{{ $data->penyebab_meninggal }}">
            </div>

            @endif

            @if($data->jenis_surat == 'Usaha')

            <div class="form-group">
                <label>Nama Usaha</label>
                <input type="text"
                    class="form-control"
                    name="nama_usaha"
                    value="{{ $data->nama_usaha }}">
            </div>

            <div class="form-group">
                <label>Jenis Usaha</label>
                <input type="text"
                    class="form-control"
                    name="jenis_usaha"
                    value="{{ $data->jenis_usaha }}">
            </div>

            <div class="form-group">
                <label>Alamat Usaha</label>
                <textarea class="form-control"
                        name="alamat_usaha">{{ $data->alamat_usaha }}</textarea>
            </div>

            <div class="form-group">
                <label>Tahun Berdiri</label>
                <input type="text"
                    class="form-control"
                    name="tahun_berdiri"
                    value="{{ $data->tahun_berdiri }}">
            </div>

            @endif
            
            @if($data->jenis_surat == 'Domisili')

            <div class="form-group">
                <label>Alamat Asal</label>
                <textarea class="form-control"
                        name="alamat_asal">{{ $data->alamat_asal }}</textarea>
            </div>

            <div class="form-group">
                <label>Alamat Domisili</label>
                <textarea class="form-control"
                        name="alamat_domisili">{{ $data->alamat_domisili }}</textarea>
            </div>

            <div class="form-group">
                <label>Tanggal Mulai Menetap</label>
                <input type="date"
                    class="form-control"
                    name="tanggal_mulai_menetap"
                    value="{{ $data->tanggal_mulai_menetap }}">
            </div>

            @endif
            <div class="btn-group-edit">

                <button type="submit"
                        class="btn-simpan">
                    Simpan Perubahan
                </button>

                <a href="/status"
                   class="btn-kembali">
                    Batal
                </a>

            </div>

        </form>

    </div>

</div>

</x-app-layout>


<script>
document.getElementById('formEditPengajuan').addEventListener('submit', function(e){

    e.preventDefault();

    Swal.fire({
        title: 'Simpan Perubahan?',
        text: 'Data akan diperbarui',
        icon: 'question',
        showCancelButton: true,
        confirmButtonText: 'Ya, Simpan',
        cancelButtonText: 'Batal'
    }).then((result) => {

        if(result.isConfirmed){
            this.submit();
        }

    });

});
</script>