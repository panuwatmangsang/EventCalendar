<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('/events','EventController');
Route::get('/AddEventUrl','EventController@display');
Route::get('/DisplayData','EventController@show');
Route::get('/DeleteEventUrl','EventController@show');