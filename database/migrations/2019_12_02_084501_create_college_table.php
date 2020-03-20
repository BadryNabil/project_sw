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
			$table->text('body');
			$table->string('university');
		});
	}

	public function down()
	{
		Schema::drop('college');
	}
}