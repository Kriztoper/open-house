<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesGenresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seriesgenres', function (Blueprint $table) {
            $table->increments('seriesgenresID');
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
        Schema::dropIfExists('seriesgenres');
    }
}
