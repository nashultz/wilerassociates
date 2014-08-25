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
		Schema::create('users', function($table) {

			// Unique ID
			$table->increments('id');

			// Username
			$table->string('username');

			// Password
			$table->string('password', 512);

			// Email
			$table->string('email');

			// Protected
			$table->boolean('protected');

			// Timestamps (created_at and updated_at)
			$table->timestamps();

			// Soft Delete Users (deleted_at)
			$table->softDeletes();

			// Remember Token
			$table->string('remember_token', 512);

			// Last Login (timestamp)
			$table->timestamp('last_login')->nullable();

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		//
		Schema::drop('users');
	}

}
