<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;

class CreateMediaUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('media_users', function(Blueprint $collection)
		{
			$collection->integer('id', true);
			$collection->integer('user_id')->unsigned()->index('user_id');
			$collection->integer('media_id')->unsigned()->index('bk_media_users_media_id');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('media_users');
	}

}
