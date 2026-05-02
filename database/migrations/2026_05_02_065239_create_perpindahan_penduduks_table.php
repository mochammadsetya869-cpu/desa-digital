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
        Schema::create('perpindahan_penduduks', function (Blueprint $table) {
            $table->id();

            $table->string('nik');
            $table->string('nama');
            $table->string('jenis_kelamin');
            $table->date('tanggal_lahir');

            $table->text('alamat_asal');
            $table->text('alamat_tujuan');

            $table->string('provinsi_tujuan');
            $table->string('kabupaten_tujuan');
            $table->string('kecamatan_tujuan');
            $table->string('desa_tujuan');

            $table->string('alasan_pindah');
            $table->integer('jumlah_anggota');

            $table->string('status')->default('Menunggu');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('perpindahan_penduduks');
    }
};
