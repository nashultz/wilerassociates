<?php

use Symfony\Component\HttpKernel\Exception as Exception;
use Illuminate\Database\Eloquent\ModelNotFoundException as ModelNotFoundException;

class UserController extends \BaseController {

	public function index()
	{
		return Response::json(User::all(), 200);
	}

	public function indexWithTrashed()
	{
		return Response::json(User::withTrashed()->get(), 200);
	}

	public function create()
	{
		// Not Used (Done with AngularJS)
	}

	public function store()
	{
		$form = new UserStoreForm();

		if (!$form->validate()) 
			return Response::json( [ 'message' => 'Validation Failure', 'error' => $form->getFirstError() ], 400 );
		
		try {
			$user = new User();
			$user->fill(Input::only($user->getFillable()));
			$user->save();

			return Response::json( [ 'message' => 'Success', 'user' => $user ], 200);
		}
		catch (ModelNotFoundException $e)
		{
			return Response::json( [ 'message' => 'Exception Error', 'error' => 'Something' ], 400);
		}

	}

	public function show($id)
	{
		try {
			$user = User::findOrFail($id);
			return Response::json( [ 'message' => 'Success!', 'user' => $user ], 200);
		}
		catch (ModelNotFoundException $e)
		{
			return Response::json( [ 'message' => 'User Not Found' ], 400);
		}
		
	}

	public function edit($id)
	{
		// Not Used (Done with AngularJS)
	}

	public function update($id)
	{
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