<?php

	class UserUpdateForm extends BaseForm {

		protected $input = [ 
			'username',
			'email'
		];

		protected $rules = [ 
			'username'	=> 'unique:users,username', 
			'email'		=> 'email|unique:users,email'
		];
		
		protected $messages = [ 
			'username.unique'		=> 'Username is already in use',
			'email.email'			=> 'A Valid Email Address must be Given',
			'email.unique'			=> 'Email is already in use'
		];

		public function __construct($id)
		{
			$this->rules['username'] .= ',' . $id;
			$this->rules['email'] .= ',' . $id;
		}

	}

?>