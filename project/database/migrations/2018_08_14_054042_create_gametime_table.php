<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateGametimeTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gametime', function(Blueprint $table)
		{
			$table->integer('id', true);
			$table->integer('studentNumber');
			$table->integer('totalTime');
			$table->timestamp('startTime')->default(DB::raw('CURRENT_TIMESTAMP'));
			$table->timestamp('endTime')->default(DB::raw('CURRENT_TIMESTAMP'));
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('gametime');
	}

}
