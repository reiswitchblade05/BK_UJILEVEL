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
            $table->dateTime('jadwal', $precision = 0);
            $table->string('cita-cita');
            $table->string('alasan_siswa');
            $table->string('tujuan_siswa');
            $table->enum('status', ['Diproses', 'Selesai']);
            $table->text('saran')->nullable();
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
