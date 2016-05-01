<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGalleryContentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('gallery_contents',function(Blueprint $table){
			$table->increments('id');
			$table->string('contentType');
			$table->string('contentName');
			$table->string('contentFileExtension');
			$table->integer('publishStatus')->default(0);
			$table->string('title');
			$table->string('time');
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
		Schema::drop('gallery_contents');
	}

}
