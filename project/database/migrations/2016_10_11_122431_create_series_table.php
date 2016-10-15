<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
   public function up()
    {
        Schema::create('series', function (Blueprint $table) {
            $table->increments('seriesID');
            $table->String('seriesName');
            $table->String('seriesDesc');
            $table->String('thumbnail');
            $table->String('fthumbnail');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
     public function down()
    {
        Schema::drop('series');
    }
}
