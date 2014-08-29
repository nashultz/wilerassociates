<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

// Blade Tag Replacement
Blade::setContentTags('<%', '%>'); // for variables and all things Blade
Blade::setEscapedContentTags('<%%', '%%>'); // for escaped data

Route::get('/', function()
{
	return View::make('sample2');
});

Route::get('sample2', function()
{
	return View::make('index');
});

Route::group([ 'prefix' => 'api/v1' ], function() {

	Route::post('auth/login', 'AuthController@postLogin');	

	Route::group( [ 'before' => 'auth' ], function() {

		// Get Authenticated User
		Route::get('auth/user', 'AuthController@getUser');

		Route::resource('users','UserController');

		// Get User Count
		Route::get('user/count', 'UserController@getUserCount');

		Route::get('auth/logout', 'AuthController@getLogout');

	});

});

// Auth Override
Route::filter('auth', function()
{
	if (Auth::guest())
	{
		return Response::json( [ 'message' => 'You are not logged in...' ], 400);
	}
});

// CATCH ALL ROUTE
Route::get('{any}', function() {
	return View::make('sample2');
})->where('any', '.*');