<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePhonesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('phones', function($table) {

			// Unique ID
			$table->increments('id');

			// Morph
			$table->morphs('phoneable');

			// Phone Type
			$table->string('type');

			// Primary? (1 - Yes, 0 - No, Default - No)
			$table->boolean('primary');

			// Who Created me?
			$table->integer('created_by');

			// Who Updated Me?
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
		Schema::drop('phones');
	}

}
