<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateUservideosTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('uservideos', function(Blueprint $table)
		{
			$table->increments('userVideosID');
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
		Schema::drop('uservideos');
	}

}
