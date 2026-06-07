<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengajuan extends Model
{
    protected $table = 'pengajuan';

   protected $fillable = [
        'user_id',
        'jenis_surat',
        'nik',
        'nama',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'alamat',
        'agama',
        'pekerjaan',
        'keterangan',
        'status',
        'catatan_admin',

        
        'nomor_kk',
        'status_perkawinan',
        'alasan_pengajuan',

        'nama_anak',
        'nik_anak',
        'sekolah_tujuan',
        'tujuan_penggunaan',

        'hubungan_pelapor',
        'nama_almarhum',
        'nik_almarhum',
        'penyebab_meninggal',
        'tempat_meninggal',

        'penghasilan_bulanan',

        'nama_usaha',
        'jenis_usaha',
        'alamat_usaha',
        'tahun_berdiri',

        'alamat_asal',
        'alamat_domisili',
        'tanggal_mulai_menetap'
        

        ];

}