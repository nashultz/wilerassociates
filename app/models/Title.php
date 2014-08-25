<?php

	// Attaches to Employee (employees)

	class Title extends BaseModel {

		protected $table = 'titles';

		protected $guarded = [ 'id' ];

		public function employees()
		{
			return $this->hasMany('Employee');
		}

	}