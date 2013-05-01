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

Route::get('/{date?}/{time?}', 'LogsController@index')
	->where('date', '[0-9]{4}-[0-1][0-9]-[0-3][0-9]')
	->where('time', '[0-2][0-9]:[0-5][0-9]');

Route::get('search/',         'LogsController@search');
Route::get('search/{query?}', 'LogsController@search');
