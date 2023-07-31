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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('email')->unique();
            $table->string('password');
        });

        Schema::create('kecamatan', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('kecamatan');
        });
        Schema::create('desa', function (Blueprint $table) {
            $table->id();
            $table->string('desa');
        });
        Schema::create('kelas', function (Blueprint $table) {
            $table->id();
            $table->string('kelas');
        });
        Schema::create('kategori', function (Blueprint $table) {
            $table->id();
            $table->string('kategori');
        });
        Schema::create('petani', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('hp');
            $table->string('kecamatan');
            $table->string('desa');
            $table->string('kelas');
            $table->string('luas');
            $table->string('tumbuhan');
            $table->string('waktu_panen');
            $table->string('jumlah_bibit');
            $table->string('koordinat');
            $table->string('tanggal');
        });

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
         Schema::dropIfExists('users','kecamatan','desa','kelas','kategori','petani');
    }
};