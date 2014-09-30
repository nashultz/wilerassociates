<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEventsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('events', function(Blueprint $table)
		{
      $table->engine = 'InnoDB';
			$table->increments('id');
			$table->timestamps();
      $table->softDeletes();
      $table->string('created_by')->nullable();
      $table->tinyInteger('updated_by')->nullable();
      $table->tinyInteger('deleted_by')->nullable();
      $table->string('title');
      $table->string('title_slug');
      $table->text('description')->nullable();
      $table->tinyInteger('publish')->default('0');
      $table->string('address');
      $table->string('city');
      $table->string('state');
      $table->tinyInteger('zip');
      $table->date('start_date');
      $table->date('end_date');
      $table->time('start_time');
      $table->time('end_time');
      $table->string('image');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('events');
	}

}
