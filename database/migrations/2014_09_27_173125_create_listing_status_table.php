<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingStatusTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('listing_status', function(Blueprint $table)
		{
			$table->increments('id');
			$table->timestamps();
      $table->softDeletes();
      $table->string('created_by')->nullable();
      $table->tinyInteger('updated_by')->nullable();
      $table->tinyInteger('deleted_by')->nullable();
      $table->string('name');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('listing_status');
	}

}
