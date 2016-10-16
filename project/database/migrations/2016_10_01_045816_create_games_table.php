<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGamesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('games', function (Blueprint $table) {
           $table->increments('gameID');
           $table->String('gameName');
           $table->String('gameDesc');
           $table->integer('scoreID');
           $table->String('gameURL');
           $table->String('thumbnail');
           $table->String('fthumbnail');
           $table->String('className');
           $table->boolean('isJar');
           $table->integer('width');
           $table->integer('height');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('games');
    }
}
