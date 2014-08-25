<?php

	// Attaches to Utility Model (utility)

	class UtilityVendor extends BaseModel {

		protected $table = 'utility_vendors';

		protected $guarded = [ 'id' ];

		public function utility()
		{
			return $this->belongsTo('Utility');
		}

	}