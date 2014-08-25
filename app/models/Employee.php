<?php

	// Attaches to Office Model (office)
	// Attaches to Phone Model (phones)
	// Attaches to Specialty (specialties)
	// Attaches to Title (title)

	class Employee extends BaseModel {

		protected $table = 'employees';

		protected $guarded = [ 'id' ];

		public function office()
		{
			return $this->belongsTo('Office');
		}

		public function phones()
		{
			return $this->morphMany('Phone', 'phoneable');
		}

		public function specialties()
		{
			return $this->belongsToMany('Specialty', 'employee_has_specialties');
		}

		public function title()
		{
			return $this->belongsTo('Title');
		}

	}