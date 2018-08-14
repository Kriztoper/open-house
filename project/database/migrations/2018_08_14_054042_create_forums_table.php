<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateForumsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('forums', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('author');
			$table->integer('tag_id')->default(1);
			$table->integer('num_comments')->default(0);
			$table->string('color')->default('#66ccff');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('forums');
	}

}
