<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateStorysTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('storys',function(Blueprint $table){
			$table->increments('id');
			$table->string('firstname');
			$table->string('lastname');
			$table->string('phone');
			$table->string('email');
			$table->string('address');
			$table->longtext('story');
			$table->string('image');
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
		Schema::drop('storys');
	}

}
