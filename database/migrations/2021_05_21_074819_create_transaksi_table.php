<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateTransaksiTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id('id_transaksi');
            $table->integer('quantity');
            $table->integer('total_harga');
            $table->unsignedBigInteger('id_player');
            $table->foreign('id_player')->references('id_player')->on('player');
            $table->unsignedBigInteger('id_item');
            $table->foreign('id_item')->references('id_item')->on('item');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('transaksi');
    }
}
