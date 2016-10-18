<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('home', 'HomeController@index');

Route::group(['prefix'=>'sports'],function(){
	Route::get('/','SportsController@index');
	Route::get('bloodpressure','SportsController@bloodpressure');
	Route::get('sportsmanagement','SportsController@index');
});

Route::get('competition','CompetitionController@index');
Route::get('onlineforum','OnlineForumController@index');