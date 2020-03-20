<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateSettingsTable extends Migration {

	public function up()
	{
		Schema::create('settings', function(Blueprint $table) {
			$table->increments('id');
			$table->timestamps();
			$table->string('phone');
			$table->string('email');
			$table->text('about_app');
			$table->string('play_store_link');
			$table->string('app_store_link');
			$table->string('watssap_link');
			$table->string('google_link');
		});
	}

	public function down()
	{
		Schema::drop('settings');
	}
}