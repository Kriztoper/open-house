<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVideoTime extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('videoTime', function (Blueprint $table) {
            $table->integer('studentNumber');
            $table->integer('timeStart');
            $table->integer('timeOut');
            $table->integer('totalTime'); 
        }); 
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::drop('videoTime');   
    }
}
