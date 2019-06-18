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

/*Route::get('/', function()
{
	return View::make('home');
});*/
Route::get('/', array('uses' => 'HomeController@home', 'as' => 'home'));

Route::get('annonce/{annonce_id}', 'HomeController@annonce');
Route::post('search', 'HomeController@search');

Route::controller('contacts', 'ContactsController');
Route::controller('guest', 'GuestController');
Route::controller('auth', 'AuthController');
Route::controller('password', 'RemindersController');

