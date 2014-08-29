<?php

	class AuthController extends BaseController {

		public function postLogin()
		{
			if ( !Auth::guest() )
			{
				return JSON::failure( 'You are already logged in' );
			}

			$form = new UserLoginForm();
			$credentials = Input::only( 'username', 'password' );

			if ( !$form->validate() )
			{
				return JSON::failure( $form->getFirstError() );
			}

			if (!Auth::attempt($credentials))
			{
				return JSON::failure('Invalid Username and/or Password');
			}

			return JSON::success();
		}

		public function getLogout()
		{
			Auth::logout();
			return JSON::success( ' You have been logged out' );
		}

		public function getUser()
		{
			return JSON::success( [ 'user' => Auth::User() ] );
		}

	}

?>