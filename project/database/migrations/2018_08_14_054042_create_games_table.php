<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGamesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('games', function(Blueprint $table)
		{
			$table->increments('gameID');
			$table->string('gameName');
			$table->string('gameDesc');
			$table->integer('scoreID');
			$table->string('gameURL');
			$table->string('thumbnail');
			$table->string('fthumbnail');
			$table->string('className');
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
		Schema::drop('games');
	}

}
