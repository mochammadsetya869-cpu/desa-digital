<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PerpindahanPenduduk extends Model
{
    protected $fillable = [
        'nik',
        'nama',
        'jenis_kelamin',
        'tanggal_lahir',
        'alamat_asal',
        'alamat_tujuan',
        'provinsi_tujuan',
        'kabupaten_tujuan',
        'kecamatan_tujuan',
        'desa_tujuan',
        'alasan_pindah',
        'jumlah_anggota',
        'status',
    ];
}