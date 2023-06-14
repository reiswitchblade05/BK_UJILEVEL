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
        Schema::create('bimbingan_pelajar', function (Blueprint $table) {
            $table->id();
            $table->string('nama_siswa');
            $table->string('tema');
            $table->dateTime('jadwal_siswa', $precision = 0);
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
        Schema::dropIfExists('bimbingan_pelajar');
    }
};
