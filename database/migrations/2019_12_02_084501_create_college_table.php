<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateCollegeTable extends Migration {

	public function up()
	{
		Schema::create('college', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('name', 200);
			$table->integer('grade');
			$table->string('university');
			$table->text('body');
			$table->string('department');
			$table->integer('number_of_student')->nullable();
			$table->text('image')->nullable();
		});
	}

	public function down()
	{
		Schema::drop('college');
	}
}