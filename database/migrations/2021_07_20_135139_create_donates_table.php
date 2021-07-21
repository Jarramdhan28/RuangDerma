<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDonatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('donates', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('poto', 2048)->nullable();
            $table->string('jenis_donasi');
            $table->string('deskripsi');
            $table->string('provinsi');
            $table->string('kota');
            $table->string('alamat_lengkap');
            $table->string('cara_pengambilan');
            $table->string('kondisi');
            $table->string('pengguna_id');
            $table->string('status')->default('tersedia');
            $table->string('publis')->default('0');
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
        Schema::dropIfExists('donates');
    }
}
