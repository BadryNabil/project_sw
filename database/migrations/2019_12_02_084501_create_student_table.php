<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateStudentTable extends Migration {

	public function up()
	{
		Schema::create('student', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('username');
			$table->string('password');
			$table->string('api_token',60)->unique()->nullable();
			$table->string('email');
			$table->string('phone');
			$table->string('city');
		});
	}

	public function down()
	{
		Schema::drop('student');
	}
}