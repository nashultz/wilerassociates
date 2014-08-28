<?php

use Symfony\Component\HttpKernel\Exception as Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class UserController extends \BaseController {

	public function index()
	{
		if (!Auth::User()->can( 'list_users' ) )
			return JSON::accessDenied();

		try {
			$users = User::all();
			return JSON::success( [ 'users' => $users ] );
		}
		catch (ModelNotFoundException $e)
		{
			
		}
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
			return JSON::success( [ 'user' => $user ] );
		}
		catch (ModelNotFoundException $e)
		{
			return JSON::failure( 'User Not Found' );
		}
		
	}

	public function update($id)
	{
		if (!Auth::User()->can('update_user'))
			return JSON::accessDenied();

		$form = new UserUpdateForm($id);

		if (!$form->validate())
			return JSON::failure( $form->getFirstError() );

		try {
			$user = User::findOrFail($id);
			$user->fill(Input::only($user->getFillable()));
			$user->save();

			return JSON::success( [ 'user' => $user ] );
		}
		catch (ModelNotFoundException $e)
		{
			return JSON::failure( 'User Not Found' );			
		}
	}

	public function destroy($id)
	{
		if (!Auth::User()->can('delete_user'))
			return JSON::accessDenied();

		try {
			$user = User::findOrFail($id);
			$user->delete();

			return JSON::success();
		}
		catch (ModelNotFoundException $e)
		{
			return JSON::failure( 'User Not Found' );			
		}
	}

}