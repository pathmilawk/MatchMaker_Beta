<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOptFiltersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('opt_filters', function(Blueprint $table)
		{
			$table->increments('id');

			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
			$table->String('gender');
			$table->integer('age');
			$table->String('district');
			$table->String('religion');
			$table->String('motherTongue');
			$table->float('height');
			$table->String('complexion');
			$table->String('hair');
			$table->String('bodyType');
			$table->String('occupation',50);
			$table->String('drinking');
			$table->String('smoking');

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
		Schema::drop('opt_filters');
	}

}
