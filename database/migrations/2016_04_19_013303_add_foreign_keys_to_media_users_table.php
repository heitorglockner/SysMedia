<?php

use Illuminate\Database\Migrations\Migration;
use Jenssegers\Mongodb\Schema\Blueprint;

class AddForeignKeysToMediaUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('media_users', function(Blueprint $collection)
		{
			$collection->foreign('user_id', 'fk_media_users_user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$collection->foreign('media_id', 'fk_media_users_media_id')->references('id')->on('media')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('media_users', function(Blueprint $collection)
		{
			$collection->dropForeign('fk_media_users_user_id');
			$collection->dropForeign('fk_media_users_media_id');
		});
	}

}
