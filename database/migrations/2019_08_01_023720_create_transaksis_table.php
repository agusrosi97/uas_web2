<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTransaksisTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksis', function (Blueprint $table) {
           $table->increments('id');
            $table->integer('id_nasabah')->unsigned();
            $table->foreign('id_nasabah')->references('id')->on('nasabahs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_sampah')->unsigned();
            $table->foreign('id_sampah')->references('id')->on('sampahs')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_rekening')->unsigned();
            $table->foreign('id_rekening')->references('id')->on('rekenings')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('berat_sampah')->unsigned();
            $table->integer('saldo')->unsigned();

            $table->boolean('tipe');

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
        Schema::dropIfExists('transaksis');
    }
}
