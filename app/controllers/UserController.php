<?php

use Symfony\Component\HttpKernel\Exception as Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class UserController extends \BaseController {

	public function index()
	{
		if (!Auth::User()->can('list_users'))
			return JSON::accessDenied();


		return JSON::success( [ 'users' => User::all() ] );
	}

	public function store()
	{
		if (!Auth::User()->can('create_user'))
			return JSON::accessDenied();

		$form = new UserStoreForm();

		if (!$form->validate()) 
			return JSON::failure( $form->getFirstError() );
		
		try {
			$user = new User();
			$user->fill( Input::only( $user->getFillable() ) );
			$user->save();

			return JSON::success( [ 'user' => $user ]);
		}
		catch (ModelNotFoundException $e)
		{
			return JSON::failure( 'User Not Found' );
		}

	}

	public function show($id)
	{
		if (!Auth::User()->can('read_user'))
			return JSON::accessDenied();

		try {
			$user = User::findOrFail($id);
			return Response::json( [ 'message' => 'Success!', 'user' => $user ], 200);
		}
		catch (ModelNotFoundException $e)
		{
			return Response::json( [ 'message' => 'User Not Found' ], 400);
		}
		
	}

	public function update($id)
	{
		if (!Auth::User()->can('update_user'))
			return JSON::accessDenied();

		$form = new UserUpdateForm($id);

		if (!$form->validate())
			return Response::json( [ 'message' => 'Validation Failed', 'error' => $form->getFirstError() ], 400);

		try {
			$user = User::findOrFail($id);
			$user->fill(Input::only($user->getFillable()));
			$user->save();

			return Response::json( [ 'message' => 'Success!', 'user' => $user ], 200);
		}
		catch (ModelNotFoundException $e)
		{
			return Response::json( [ 'message' => 'User Not Found' ], 400);
		}
	}

	public function destroy($id)
	{
		if (!Auth::User()->can('delete_user'))
			return JSON::accessDenied();

		try {
			$user = User::findOrFail($id);
			$user->delete();

			return Response::json( [ 'message' => 'Success!' ], 200);
		}
		catch (ModelNotFoundException $e)
		{
			return Response::json( [ 'message' => 'User Not Found' ], 400);
		}
	}

}