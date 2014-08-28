<?php

	class AuthController extends BaseController {

		public function postLogin()
		{
			dd(Input::all());

			if (!Auth::guest())
			{
				return Response::json( [ 'message' => 'Already logged in' ], 400);
			}

			$form = new UserLoginForm();
			$credentials = Input::only('username', 'password');

			if (!$form->validate())
			{
				return Response::json( [ 'message' => 'Validation Failed', 'error' => $form->getFirstError() ], 400);
			}

			if (!Auth::attempt($credentials))
			{
				return Response::json( [ 'message' => 'Authentication Failed' ], 400);
			}

			dd(Auth::user());

			return Response::json( [ 'message' => 'Success!' ], 200);
		}

		public function getLogout()
		{
			Auth::logout();
			return Response::json( [ 'message' => 'You have been logged out...' ], 200);
		}

	}

?>