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