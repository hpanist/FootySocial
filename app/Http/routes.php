<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::controllers([
	"auth" 			=> 'Auth\AuthController',
	"password"	=> 'Auth\PasswordController'
]);


Route::get('/', [
	'uses' =>	'PagesController@home',
	'as' 	 => 'index'
]);

Route::get('profile', [
	'uses' => 'PagesController@getProfile',
	'as'   => 'profile',
	'middleware' => ['auth']
]);

// Signup route
Route::get('auth/register', 'auth@getRegister');
Route::post('auth/register', 'auth@postRegister');

//Login & Logout routes
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'auth@getLogout');


// To reset user's password
Route::get('/password/email', 'auth@getEmail');
Route::post('/password/email', 'password@postEmail');

Route::get('/password/reset', 'Auth\PasswordController@getReset');
Route::post('/password/reset', 'Auth\PasswordController@postReset');
