<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserVideosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('uservideos', function (Blueprint $table) {
            $table->increments('uservideosID');
            $table->integer('videoID');
            $table->integer('userID');
            $table->boolean('isBought');
            $table->integer('vidCount');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('uservideos');
    }
}
