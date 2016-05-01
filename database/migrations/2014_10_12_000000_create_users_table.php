<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

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
			$table->increments('id');
			$table->string('name');
			$table->string('lastname');
			$table->string('email')->unique();
			$table->string('password', 60);
			$table->string('bdayM');
			$table->string('bdayD');
			$table->string('bdayY');
			$table->string('username');
			$table->string('gender');
			$table->boolean('is_admin');
			$table->boolean('is_verified');
			$table->string('admin_activate_state')->default('activate');
			$table->string('user_activate_state')->default('activate');
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
