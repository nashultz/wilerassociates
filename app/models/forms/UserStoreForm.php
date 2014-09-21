<?php

	class UserStoreForm extends BaseForm {

		protected $input = [ 
			'username',
			'password',
			'password_confirmation',
			'email'
		];

		protected $rules = [ 
			'username'	=> 'required|unique:users,username', 
			'password'	=> 'required|confirmed' ,
			'email'		=> 'required|email|unique:users,email'
		];
		
		protected $messages = [ 
			'username.required'		=> 'Username Field is Required', 
			'username.unique'		=> 'Username is already in use',
			'password.required'		=> 'Password Field is Required',
			'password.confirmed'	=> 'Password must match Confirmation Password Field',
			'email.required'		=> 'Email Field is Required',
			'email.email'			=> 'A Valid Email Address must be Given',
			'email.unique'			=> 'Email is already in use'
		];

	}

?>