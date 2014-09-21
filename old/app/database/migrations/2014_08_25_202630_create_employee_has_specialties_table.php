<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEmployeeHasSpecialtiesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		//
		Schema::create('employee_has_specialties', function($table) {

			// Unique ID
			$table->increments('id');

			// Employee ID
			$table->integer('employee_id');

			// Specialty ID
			$table->integer('specialty_id');

			// Who Created?
			$table->integer('created_by');

			// Who Updated?
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
		Schema::drop('employee_has_specialties');
	}

}
