<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('employees', function($table) {

			// Unique ID
			$table->increments('id');

			// Office Location for Employee
			$table->integer('office_id');

			// First Name
			$table->string('first_name');

			// Last Name
			$table->string('last_name');

			// Email Address
			$table->string('email');

			// Biography
			$table->text('bio');

			// Title
			$table->integer('title_id');

			// Specialty
			$table->integer('specialty_id');

			// Publish? (1 - Yes, 0 - No, Default - No)
			$table->boolean('publish')->default(0);

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
		Schema::drop('employees');
	}

}
