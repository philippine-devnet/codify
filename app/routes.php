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

Route::controller('ap', 'APController');
Route::controller('login', 'LoginController');

Route::get('', 'HomeController@showIndex');



Route::group(array('prefix'=>'api'),function(){
	Route::controller('users','UsersApiController');
	Route::controller('categories','CategoryAllApiController');
	Route::resource('category','CategoryApiController');
	Route::resource('user','UserApiController');
});


