<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAmenitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('amenities', function($table) {

			// Unique ID
			$table->increments('id');

			// Name of Amenity
			$table->string('name');

			// Who Created Me?
			$table->integer('created_by');

			// Who Updated Me?
			$table->integer('updated_by');

			// When? (created_at and updated_at)
			$table->timestamps();

			// Where'd it go?
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
		Schema::drop('amenities');
	}

}
