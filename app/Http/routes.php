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

Route::group(['middleware' => 'userauth'], function() {
	Route::get('interns/', 'InternsController@index');
	Route::get('entrance_exams/', 'ExamsController@index');	
});



Route::get('/', 'HomeController@index');
Route::get('login', 'HomeController@login');
Route::get('logout', 'HomeController@logout');
Route::post('auth', 'HomeController@auth');



