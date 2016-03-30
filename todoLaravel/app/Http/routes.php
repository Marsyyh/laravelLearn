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

Route::get('/', function () {
    return view('login');
});

Route::get('login', function () {
    return view('login');
});

Route::get('registration',function(){
	return view('registration');
});


Route::get('todo/home','todoController@home');

Route::get('todo/update','todoController@update');

Route::get('logout','todoAuthController@logout');



Route::post('registration','registController@create');

Route::post('todo/home','todoController@postHandler');

Route::post('login','todoAuthController@doLogin');