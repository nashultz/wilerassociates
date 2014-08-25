<?php

	// Attaches to Listing_has_utilities (utilities)
	// Attaches to Listing_has_amenities (amentities)
	
	class Listing extends BaseModel {

		protected $table = 'listings';

		protected $guarded = [ 'id' ];

		public function utilities()
		{
			return $this->belongsToMany('Utility', 'listing_has_utilities');
		}

		public function amenities()
		{
			return $this->belongsToMany('Amenity', 'listing_has_amenities');
		}

	}