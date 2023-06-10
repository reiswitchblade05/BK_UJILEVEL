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
        Schema::create('bimbingan_sosial', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('kelas');
            $table->dateTime('jadwal_siswa', $precision = 0);
            $table->string('konflik_permasalahan');
            $table->string('tidak_lanjut');
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
        Schema::dropIfExists('bimbingan_sosial');
    }
};
