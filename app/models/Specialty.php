<?php

	// Attaches to Employee (employees)

	class Specialty extends BaseModel {

		protected $table = 'specialties';

		protected $guarded = [ 'id' ];

		public function employees()
		{
			return $this->belongsToMany('Employee', 'employee_has_specialties');
		}

	}