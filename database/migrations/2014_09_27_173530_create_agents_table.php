<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAgentsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('agents', function(Blueprint $table)
		{
      $table->engine = 'InnoDB';
			$table->increments('id');
			$table->timestamps();
      $table->softDeletes();
      $table->string('created_by')->nullable();
      $table->tinyInteger('updated_by')->nullable();
      $table->tinyInteger('deleted_by')->nullable();
      $table->string('first_name');
      $table->string('last_name');
      $table->string('name_slug');
      $table->tinyInteger('publish')->default('0');
      $table->string('email');
      $table->string('phone');
      $table->string('title');
      $table->string('specialty');
      $table->text('about')->nullable();
      $table->string('image')->default('img/agents/empty_profile.png');

		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('agents');
	}

}
