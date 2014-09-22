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

Route::get('/', [
    'as' => 'home',
    'uses' => 'PagesController@home'
]);
Route::get('search', [
    'as' => 'search',
    'uses' => 'PagesController@search'
]);
Route::get('commercial-listings', [
    'as' => 'commlist',
    'uses' => 'PagesController@listingCommercial'
]);
Route::get('residential-listings', [
    'as' => 'resilist',
    'uses' => 'PagesController@listingResidential'
]);
Route::get('simple-piti', [
    'as' => 'simplepiti',
    'uses' => 'PagesController@resourceSimplePiti'
]);
Route::get('advanced-piti', [
    'as' => 'advpiti',
    'uses' => 'PagesController@resourceAdvancedPiti'
]);
Route::get('mortgage-income', [
    'as' => 'mortincome',
    'uses' => 'PagesController@resourceMortgageIncome'
]);
Route::get('mortgage-payment', [
    'as' => 'mortpayment',
    'uses' => 'PagesController@resourceMortgagePayment'
]);