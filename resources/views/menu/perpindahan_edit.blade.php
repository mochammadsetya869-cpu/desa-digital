@section('title', 'Edit Perpindahan Penduduk')
<x-app-layout>

<div class="profil-container">

    <a href="/status" class="kembali-link">
        ← Kembali ke Status
    </a>

    <div class="edit-card">

        <div class="edit-header">
            <h1>Edit Perpindahan Penduduk</h1>
            <p>Perbaiki data yang diminta oleh admin</p>
        </div>

        <form id="formEditPerpindahan"
            action="/perpindahan/update/{{ $data->id }}"
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
                <label>Jenis Kelamin</label>

                <select class="form-control"
                        name="jenis_kelamin">

                    <option value="L"
                        {{ $data->jenis_kelamin == 'L' ? 'selected' : '' }}>
                        Laki-laki
                    </option>

                    <option value="P"
                        {{ $data->jenis_kelamin == 'P' ? 'selected' : '' }}>
                        Perempuan
                    </option>

                </select>
            </div>

            <div class="form-group">
                <label>Tanggal Lahir</label>
                <input type="date"
                       class="form-control"
                       name="tanggal_lahir"
                       value="{{ $data->tanggal_lahir }}">
            </div>

            <div class="form-group">
                <label>Jumlah Anggota Keluarga</label>
                <input type="number"
                       class="form-control"
                       name="jumlah_anggota"
                       value="{{ $data->jumlah_anggota }}">
            </div>

            <div class="form-group">
                <label>Alamat Asal</label>
                <textarea class="form-control"
                          name="alamat_asal">{{ $data->alamat_asal }}</textarea>
            </div>

            <div class="form-group">
                <label>Alamat Tujuan</label>
                <textarea class="form-control"
                          name="alamat_tujuan">{{ $data->alamat_tujuan }}</textarea>
            </div>

            <div class="form-group">
                <label>Provinsi Tujuan</label>
                <input type="text"
                       class="form-control"
                       name="provinsi_tujuan"
                       value="{{ $data->provinsi_tujuan }}">
            </div>

            <div class="form-group">
                <label>Kabupaten Tujuan</label>
                <input type="text"
                       class="form-control"
                       name="kabupaten_tujuan"
                       value="{{ $data->kabupaten_tujuan }}">
            </div>

            <div class="form-group">
                <label>Kecamatan Tujuan</label>
                <input type="text"
                       class="form-control"
                       name="kecamatan_tujuan"
                       value="{{ $data->kecamatan_tujuan }}">
            </div>

            <div class="form-group">
                <label>Desa Tujuan</label>
                <input type="text"
                       class="form-control"
                       name="desa_tujuan"
                       value="{{ $data->desa_tujuan }}">
            </div>

            <div class="form-group">
                <label>Alasan Pindah</label>
                <input type="text"
                       class="form-control"
                       name="alasan_pindah"
                       value="{{ $data->alasan_pindah }}">
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

<script>
document.getElementById('formEditPerpindahan').addEventListener('submit', function(e){

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

</x-app-layout>