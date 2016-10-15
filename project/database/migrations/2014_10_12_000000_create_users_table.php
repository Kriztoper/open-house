<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('first_name');
            $table->string('last_name');
            $table->integer('student_number')->unique();
            $table->string('password', 60);
            $table->rememberToken();
            $table->timestamps();
            $table->integer('user_ID');
            $table->integer('rand_num');
            $table->integer('token');
            $table->integer('image_ID');
            $table->float('numOfHours');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('users');
        Schema::dropIfExists('users');
    }
}
