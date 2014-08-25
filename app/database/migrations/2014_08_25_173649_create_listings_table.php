<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('listings', function($table) {

			// Unique ID
			$table->increments('id');

			// Listing Type (1 - Commercial, 0 - Residential, Default - Residential)
			$table->tinyInteger('type')->default(0);

			// Listing SubType ID
			$table->integer('listing_subtype_id');

			// Slug (hypenated address notation (123-lol-lane))
			$table->string('slug');

			// Address (123 lol lane)
			$table->string('address');

			// City
			$table->string('city');

			// State
			$table->string('state');

			// Zip (Limited to 10 Characters. 33333-3333)
			$table->string('zip', 10);

			// Description
			$table->text('description');

			// Listing Status (0 - Active, 1 - Pending Taking Backups, 2 - Sold)
			$table->tinyInteger('status');

			// Price
			$table->decimal('price', 15, 2);

			// Lease Price
			$table->decimal('lease_price', 15, 2);

			// CAD ID
			$table->string('cad_id');

			// LoopNet URL
			$table->string('loopnet_url');

			// Stories
			$table->tinyInteger('stories');

			// Lot
			$table->decimal('lot', 10, 4);

			// Year Built
			$table->integer('year_built');

			// Footage
			$table->integer('footage');

			// PDF File
			$table->string('pdf');

			// Google Map
			$table->text('google_map');

			// County
			$table->integer('county_id');

			// Publish (0 - No, 1 - Yes, Default - No)
			$table->boolean('publish');

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
	}

}
