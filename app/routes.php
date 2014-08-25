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

Route::get('/', function()
{
	return View::make('index');
});


API::transform('User', 'UserTransformer');

API::error(function(Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException $exception) {
	return Response::make('Hey, what do you think you are doing...', 401);
});

Route::api([ 'version' => 'v1' ], function() {

	Route::get('users', 'UserController@index');

	//Route::resource('users','UserController');

});
