<?php

use Illuminate\Eloquent\SoftDeletingTrait;

	class BaseModel extends Eloquent {

		use SoftDeletingTrait;

		protected $dates = [ 'created_at', 'updated_at', 'deleted_at', 'last_login' ];

	}