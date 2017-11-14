<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideosGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('videosGenres', function (Blueprint $table) {
            $table->increments('videoGenreID');
            $table->integer('videoID');
            $table->integer('genreID');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('videosGenres');
        Schema::dropIfExists('  seriesgenres');
    }
}
