<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});
 
Route::get('test','welcomeController@test');

Route::get('contact','welcomeController@contact');

Route::get('about','pagesController@about');

//Transfer data from url trying


Route::get('hello/{name?}',function($yum="haha"){
	$tmp = [];
	$tmp['wow'] = $yum;
	return view('hello',$tmp);
});


// Laravel MVC workflow trying

Route::get('article','articleController@index');

Route::get('article/create','articleController@create');

Route::get('article/{id}','articleController@show');


// handle post request
Route::post('article','articleController@store');


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});
