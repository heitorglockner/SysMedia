<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;

class CreateMediaTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media', function(Blueprint $collection)
		{
			$collection->increments('id');
			$collection->string('name');
			$collection->string('image');
			$collection->string('psd');
			$collection->string('comments');
			$collection->dateTime('publish');
			$collection->integer('author_id')->unsigned()->index('fk_media_author_id_idx');
			$collection->string('slug', 100);
			$collection->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media');
	}

}
