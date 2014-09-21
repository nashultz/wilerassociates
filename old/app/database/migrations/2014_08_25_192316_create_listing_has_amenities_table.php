<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingHasAmenitiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('listing_has_amenities', function($table) {

			// Unique ID
			$table->increments('id');

			// Listing ID
			$table->integer('listing_id');

			// Amenity ID
			$table->integer('amenities_id');

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
		Schema::drop('listing_has_amenities');
	}

}
