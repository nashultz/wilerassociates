<?php

	// Attaches to Employee Model (employees)

	class Office extends BaseModel {

		protected $table = 'offices';

		protected $guarded = [ 'id' ];

		public function employees()
		{
			return $this->hasMany('Employee');
		}

	}