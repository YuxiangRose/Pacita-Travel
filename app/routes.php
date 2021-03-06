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
//print App::environment();
Route::get('/', 'HomeController@showWelcome');
Route::get('ticket','TicketsController@getIndex');
Route::get('date','TicketsController@getDate');

Route::get('update','TicketsController@update');

Route::post('search','TicketsController@search');
Route::post('next','TicketsController@next');
Route::post('prev','TicketsController@prev');
Route::post('saveComment','TicketsController@saveComment');
Route::post('report','TicketsController@report');
