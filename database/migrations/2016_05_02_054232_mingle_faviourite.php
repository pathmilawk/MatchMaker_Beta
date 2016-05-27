<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class MingleFaviourite extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('mingle_faviourite', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('path');
			$table->string('name');
			$table->string('User_id');
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
		Schema::drop('recentLoggedUsers');
	}

}
