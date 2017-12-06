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
        Schema::create('videosgenres', function (Blueprint $table) {
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
<<<<<<< HEAD
        Schema::dropIfExists('videosGenres');
=======
        Schema::dropIfExists('videosgenres');
>>>>>>> origin/development
        Schema::dropIfExists('  seriesgenres');
    }
}
