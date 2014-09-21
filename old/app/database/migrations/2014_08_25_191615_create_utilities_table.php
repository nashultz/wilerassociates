<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateUtilitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('utilities', function($table) {

			// Unique ID
			$table->increments('id');

			// Type of Utility
			$table->string('name');

			// Who Created Me?
			$table->integer('created_by');

			// Who Updated Me?
			$table->integer('updated_by');

			// Timestamps (created_at and updated_at);
			$table->timestamps();

			// Soft Deletes (deleted_at)
			$table->softDeletes();

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
		Schema::drop('utilities');
	}

}
