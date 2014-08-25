<?php

	// BaseModel for All Created Models

	// Attaches to User Model (created_by, updated_by)

	use Illuminate\Eloquent\SoftDeletingTrait;

	class BaseModel extends Eloquent {

		use SoftDeletingTrait;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at', 'last_login' ];

		public function createdBy()
		{
			return $this->belongsTo('User', 'created_by');
		}

		public function updatedBy()
		{
			return $this->belongsTo('User', 'updated_by');
		}

	}