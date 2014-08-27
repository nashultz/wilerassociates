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
	return View::make('index');
});

Route::get('/index2', function()
{
	return View::make('index2');
});


API::transform('User', 'UserTransformer');

API::error(function(Symfony\Component\HttpKernel\Exception\UnauthorizedHttpException $exception) {
	return Response::make('Hey, what do you think you are doing...', 401);
});

Route::api([ 'version' => 'v1', 'protected' => true ], function() {

	Route::get('users', 'UserController@index');

	//Route::resource('users','UserController');

});
