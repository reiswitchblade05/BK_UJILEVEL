<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('bimbingan_karir', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->dateTime('jadwal_bimbingan', $precision = 0);
            $table->dateTime('jadwal_sosialisasi', $precision = 0)->nullable();
            $table->string('karir');
            $table->text('alasan_siswa');
            $table->text('tujuan_siswa');
            $table->enum('status', ['Diproses', 'Selesai']);
            $table->text('hasil')->nullable();
            $table->text('tindak_lanjut')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('bimbingan_karir');
    }
};
