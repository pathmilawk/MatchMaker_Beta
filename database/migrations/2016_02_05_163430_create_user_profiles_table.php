<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUserProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('user_profiles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('first_name');
			$table->string('last_name');
			$table->string('nickname');
			$table->string('gender');
			$table->string('interested_in');
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
		Schema::drop('user_profiles');
	}

}
