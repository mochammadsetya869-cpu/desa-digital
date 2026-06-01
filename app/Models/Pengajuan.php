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
        'catatan_admin'
    ];
}