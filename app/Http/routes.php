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

Route::get('/', 'PagesController@home');
Route::get('profile', 'PagesController@profile');

Route::get('/auth/join', 'Auth\AuthController@getRegister');
Route::post('/auth/join', 'Auth\AuthController@postRegister');

Route::get('/auth/enter', 'Auth\AuthController@getLogin');
Route::post('/auth/enter', 'Auth\AuthController@postLogin');
Route::get('/auth/logout', 'Auth\AuthController@getLogout');

Route::controllers([
	"auth" 			=> 'Auth\AuthController',
	"password"	=> 'Auth\PasswordController'
]);
