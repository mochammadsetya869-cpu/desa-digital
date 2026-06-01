<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->text('catatan_admin')->nullable();
        });

        Schema::table('perpindahan_penduduks', function (Blueprint $table) {
            $table->text('catatan_admin')->nullable();
        });
    }

    public function down(): void
    {
        Schema::table('pengajuan', function (Blueprint $table) {
            $table->dropColumn('catatan_admin');
        });

        Schema::table('perpindahan_penduduks', function (Blueprint $table) {
            $table->dropColumn('catatan_admin');
        });
    }
};