<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateVideotimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('videotime', function(Blueprint $table)
		{
			$table->integer('studentNumber');
			$table->integer('timeOut');
			$table->integer('KDRAMA');
			$table->integer('ANIME');
			$table->integer('genre');
			$table->dateTime('startTime')->default('0000-00-00 00:00:00');
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
