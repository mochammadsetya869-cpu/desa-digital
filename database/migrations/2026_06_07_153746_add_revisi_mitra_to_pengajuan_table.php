<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
{
Schema::table('pengajuan', function (Blueprint $table) {


    // KTP / KK
    $table->string('nomor_kk')->nullable();
    $table->string('status_perkawinan')->nullable();
    $table->string('alasan_pengajuan')->nullable();

    // SKTM
    $table->string('nama_anak')->nullable();
    $table->string('nik_anak')->nullable();
    $table->string('sekolah_tujuan')->nullable();
    $table->string('tujuan_penggunaan')->nullable();

    // Kematian
    $table->string('hubungan_pelapor')->nullable();
    $table->string('nama_almarhum')->nullable();
    $table->string('nik_almarhum')->nullable();
    $table->string('penyebab_meninggal')->nullable();
    $table->string('tempat_meninggal')->nullable();

    // Penghasilan
    $table->string('penghasilan_bulanan')->nullable();

    // Usaha
    $table->string('nama_usaha')->nullable();
    $table->string('jenis_usaha')->nullable();
    $table->text('alamat_usaha')->nullable();
    $table->string('tahun_berdiri')->nullable();

    // Domisili
    $table->text('alamat_asal')->nullable();
    $table->text('alamat_domisili')->nullable();
    $table->date('tanggal_mulai_menetap')->nullable();
});


}

public function down(): void
{
Schema::table('pengajuan', function (Blueprint $table) {


    $table->dropColumn([
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
    ]);
});


}
};
