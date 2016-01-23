<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('users', function(Blueprint $table)
		{
			$table->bigIncrements('id');
			$table->string('username');
			$table->string('password', 60);
			$table->string('email')->unique();
			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname');
			$table->string('gender');
			$table->string('interested_in');
			$table->date('birthday');
			$table->string('age');
			$table->string('religion');
			$table->string('ethnicity');
			$table->string('country');
			$table->string('hometown');
			$table->string('location');
			$table->string('address');
			$table->string('telephone_mobile');
			$table->string('telephone_home');
			$table->string('telephone_office');
			$table->text('education');
			$table->text('work');
			$table->string('languages');
			$table->string('facebook');
			$table->longText('about');
			$table->boolean('is_verified');
			$table->integer('cover_photo');
			$table->integer('inbox');
			$table->boolean('is_admin');
			$table->rememberToken();
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
		Schema::drop('users');
	}

}
