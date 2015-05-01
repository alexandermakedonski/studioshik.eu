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
/**
 *  The Home page
 */
Route::get('/', 'PagesController@home');

/**
 * Admin
 */
Route::get('notices/create/confirm','NoticesController@confirm');
Route::resource('notices','NoticesController');

/**
 * Authentication
 */

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
