<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateWebAppsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('web_apps', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->string('pagename');
			$table->string('link');
			$table->string('category');
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
		Schema::drop('web_apps');
	}

}
