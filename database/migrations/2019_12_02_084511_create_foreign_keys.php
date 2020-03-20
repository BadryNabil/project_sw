<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Eloquent\Model;

class CreateForeignKeys extends Migration {

	public function up()
	{
		Schema::table('studet_feed', function(Blueprint $table) {
			$table->foreign('student_id')->references('id')->on('student')
						->onDelete('no action')
						->onUpdate('no action');
		});
		Schema::table('studet_feed', function(Blueprint $table) {
			$table->foreign('feed_id')->references('id')->on('feedback')
						->onDelete('no action')
						->onUpdate('no action');
		});
	}

	public function down()
	{
		Schema::table('studet_feed', function(Blueprint $table) {
			$table->dropForeign('studet_feed_student_id_foreign');
		});
		Schema::table('studet_feed', function(Blueprint $table) {
			$table->dropForeign('studet_feed_feed_id_foreign');
		});
	}
}