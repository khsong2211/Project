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

/*
Route::get('song',function () { 
	return view('song'); 
});
*/

Route::get('/song',function () {
    return view('song');
});

Route::get('/account','AccountsController@index'); //display data 
Route::post('/insert','AccountsController@store');//insert data

Route::delete('/delete','AccountsController@destroy');  //delete data
Route::patch('/update','AccountsController@insert'); //update data
Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
