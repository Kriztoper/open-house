<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebappsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('webapps', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('pagename');
			$table->string('link');
			$table->string('imagename');
			$table->text('pagedescription', 65535);
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
		Schema::drop('webapps');
	}

}
