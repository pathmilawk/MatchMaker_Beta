<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProfilesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('profiles', function(Blueprint $table)
		{
			$table->increments('id'); //auto incremented
			$table->integer('user_id')->unsigned();
			$table->foreign('user_id')->references('id')->on('users');

			$table->string('first_name');
			$table->string('last_name');
			$table->String('gender');
			$table->string('birthday'); // format- 1995.01.04
			$table->String('religion'); // Buddhist, Christian, Muslim, Hindu
			$table->String('motherTongue');// Language she/he speak
			$table->longText('about');
			$table->float('height'); //in feet ex:-5.1
			$table->String('complexion'); // Fair, Dark, Brown
			$table->String('hair'); // Wavy, Short, Curly, Straight, Long,
			$table->String('bodyType'); // Slim, Average, Fat, Well Build, Skinny
			$table->String('occupation',50); //type in value
			$table->String('drinking'); //'Yes' , 'No', or 'Occasionally'
			$table->String('smoking'); //'Yes' , 'No', or 'Occasionally'
			$table->string('interested_in');
			$table->string('country');	//current country
			$table->string('hometown'); //Type in/ Where she/he grew up
			$table->string('location'); //current Districts
			$table->string('languages'); // one extra language they can speak id any- Sinhala, English, Tamil, Hindi
			$table->string('education'); // to select-> 'Degree Holder','High school Graduate',
			$table->string('sign');
			$table->integer('profile_picture');

			$table->string('address'); // home address
			$table->string('telephone'); // one phone number
			$table->boolean('allowNonFriendPhotos');
			$table->boolean('allowNonFriendDetails');


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
		Schema::drop('profiles');
	}

}
