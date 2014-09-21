<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateOfficesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('offices', function($table) {

			// Unique ID
			$table->increments('id');

			// Identifying Name
			$table->string('name');

			// Slug Identifier
			$table->string('slug');

			// Address
			$table->string('address');

			// City
			$table->string('city');

			// State
			$table->string('state');

			// Zip (Limited to 10 Characters 33333-3333)
			$table->string('zip', 10);

			// Publish (1 - Yes, 0 - No, Default - No)
			$table->boolean('publish')->default(0);

			// Who Created It?
			$table->integer('created_by');

			// Who Last Editted ???
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
		Schema::drop('offices');
	}

}
