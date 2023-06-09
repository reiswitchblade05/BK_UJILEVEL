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
        Schema::create('murid', function (Blueprint $table) {
            $table->id()->unique();
            $table->string('nama_siswa');
            $table->unsignedBigInteger('user_id');
            $table->string('kelas');
            $table->enum('jenis_kelamin', ['Laki-Laki', 'Perempuan']);
            $table->string('nisn');
            $table->date('tanggal_lahir');
            $table->string('email');
            $table->string('password');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('murid');
    }
};
