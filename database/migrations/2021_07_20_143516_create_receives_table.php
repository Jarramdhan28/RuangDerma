<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReceivesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('receives', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('penerima_id')->unsigned();
            $table->bigInteger('donasi_id')->unsigned();
            $table->bigInteger('donatur_id')->unsigned();
            $table->foreign('penerima_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('donasi_id')->references('id')->on('donates')->onDelete('cascade');
            $table->foreign('donatur_id')->references('id')->on('users')->onDelete('cascade');
            $table->string('alasan')->default('Tidak Ada Alasan');
            $table->string('status')->default('pending');
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
        Schema::dropIfExists('receives');
    }
}
