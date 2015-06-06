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

Route::get('/{slug}', [
	'as' => 'program.show',
	'uses' => 'HomesController@show',
]);
Route::post('inquire/{inquire}', [
	'as' => 'mail.inquire',
	'uses' => 'HomesController@mail'
]);
Route::resource('/', 'HomesController');
Route::resource('vegas', 'ProgramsController');
