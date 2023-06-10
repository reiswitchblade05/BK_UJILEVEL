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
        Schema::create('bimbingan_pribadi', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->integer('nipd');
            $table->string('tema_konseling');
            $table->dateTime('jadwal_konseling', $precision = 0);
            $table->string('isi_konseling');
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
        Schema::dropIfExists('bimbingan_pribadi');
    }
};
