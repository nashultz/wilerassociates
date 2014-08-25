<?php

	// Attaches to Listing Model (listings)
	// Attaches to UtilityVendor Model (vendors)

	class Utility extends BaseModel {

		protected $table = 'utilities';

		protected $guarded = [ 'id' ];

		public function listings()
		{
			return $this->belongsToMany('Listing', 'listing_has_utilities');
		}

		public function vendors()
		{
			return $this->hasMany('UtilityVendor');
		}

	}