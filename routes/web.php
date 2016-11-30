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
    Route::post('bloodpressuredata','SportsController@bloodpressuredata');
    Route::post('weightdata','SportsController@weightdata');

    Route::get('walkingmanagement','SportsController@walkingmanagement');
    Route::post('walkingdata','SportsController@walkingdata');

    Route::get('runningmanagement','SportsController@runningmanagement');
    Route::post('runningdata','SportsController@runningdata');

	Route::get('sleepanalysis','SportsController@sleepanalysis');
    Route::post('sleepdata','SportsController@sleepdata');

	Route::get('sportsmanagement','SportsController@index');

    Route::get('sportsdata','SportsController@sportsdata');
    Route::get('finalanalysis','SportsController@sportsanalysis');

    Route::get('info','SportsController@info');

});

Route::group(['prefix'=>'competition'],function(){
	Route::get('singlecompetition','CompetitionController@single');
    Route::get('singlecompetition/{id}', 'CompetitionController@showComp');

    Route::get('groupcompetition','CompetitionController@group');
    Route::get('groupcompetition/{id}', 'CompetitionController@showComp');

    Route::get('targetcompetition','CompetitionController@target');
    Route::get('targetcompetition/{id}', 'CompetitionController@showComp');

    Route::get('mycompetition','CompetitionController@mycompetition');

    Route::post('join','CompetitionController@join');

	Route::get('launchcompetition','CompetitionController@create');

    Route::post('launchComp','CompetitionController@store');

    Route::get('info','CompetitionController@info');
});
