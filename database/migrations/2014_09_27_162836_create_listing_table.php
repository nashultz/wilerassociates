<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateListingTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('listing', function(Blueprint $table)
		{
      $table->engine = 'InnoDB';
			$table->increments('id');
      $table->timestamps();
      $table->softDeletes();
      $table->string('created_by')->nullable();
      $table->tinyInteger('updated_by')->nullable();
      $table->tinyInteger('deleted_by')->nullable();
      $table->tinyInteger('publish')->default('0');
      $table->tinyInteger('featured')->default('0');
      $table->tinyInteger('status_id')->unsigned();
      $table->string('title');
      $table->string('title-slug');
      $table->text('description')->nullable();
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->integer('zip');
      $table->tinyInteger('type_id');
      $table->tinyInteger('subtype_id');
      $table->integer('price');
      $table->string('mlsno')->nullable();
      $table->integer('lot')->nullable();
      $table->integer('footage')->nullable();
      $table->integer('stories')->nullable();
      $table->integer('beedrooms')->nullable();
      $table->integer('bathrooms')->nullable();
      $table->tinyInteger('year_built')->nullable();
      $table->text('amenities')->nullable();
    });
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('listing');
	}

}
