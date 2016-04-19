<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class AddForeignKeysToMediaUsersTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('media_users', function(Blueprint $table)
		{
			$table->foreign('user_id', 'fk_media_users_user_id')->references('id')->on('users')->onUpdate('CASCADE')->onDelete('CASCADE');
			$table->foreign('media_id', 'fk_media_users_media_id')->references('id')->on('media')->onUpdate('CASCADE')->onDelete('CASCADE');
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('media_users', function(Blueprint $table)
		{
			$table->dropForeign('fk_media_users_user_id');
			$table->dropForeign('fk_media_users_media_id');
		});
	}

}
