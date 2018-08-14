<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVidTimer extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('videotime', function (Blueprint $table) {
            $table->integer('studentNumber');
            $table->integer('timeStart');
            $table->integer('timeOut');
            $table->integer('KDRAMA');
            $table->integer('ANIME'); 
            $table->integer('genre');
          });  
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('videotime');   
    }
}
