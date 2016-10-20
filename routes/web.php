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
Route::get('about','HomeController@about');
Route::get('moments','MomentsController@index');

Route::group(['prefix'=>'sports'],function(){
	Route::get('bodymanagement','SportsController@bodymanagement');
	Route::get('sleepanalysis','SportsController@sleepanalysis');
	Route::get('sportsmanagement','SportsController@index');
});

Route::group(['prefix'=>'competition'],function(){
	Route::get('singlecompetition','CompetitionController@single');
	Route::get('groupcompetition','CompetitionController@group');
});
