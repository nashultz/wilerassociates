<?php

	class UserLoginForm extends BaseForm {

		protected $input = [ 
			'username',
			'password'
		];

		protected $rules = [ 
			'username' => 'required', 
			'password' => 'required' 
		];
		
		protected $messages = [ 
			'username.required' => 'Username Field is Required', 
			'password.required' => 'Password Field is Required' 
		];

	}

?>