<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlayerTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('player', function (Blueprint $table) {
            $table->id('id_player');
            $table->string('email');
            $table->string('username');
            $table->string('password');
            $table->integer('cash')->default(0);
            //$table->rememberToken();
            $table->unsignedBigInteger('id_tipe_user')->default(2);
            $table->foreign('id_tipe_user')->references('id_tipe_user')->on('tipe_user');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('player');
    }
}
