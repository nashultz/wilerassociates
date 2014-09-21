<?php

	// Morphed Model

	class Phone extends BaseModel {

		protected $table = 'phones';

		protected $guarded = [ 'id' ];

		public function phoneable()
		{
			return $this->morphTo();
		}

	}