<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTitlesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('titles', function($table) {

			// Unique ID
			$table->increments('id');

			// Name
			$table->string('name');

			// Created By
			$table->integer('created_by');

			// Updated By
			$table->integer('updated_by');

			// Timestamps (created_at and updated_at)
			$table->timestamps();

			// SoftDeletes (deleted_at)
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
		Schema::drop('titles');
	}

}
