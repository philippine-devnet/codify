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
Route::controller('/', 'HomeController');
Route::controller('api/users','UsersApiController');
Route::controller('api/categories','CategoryAllApiController');

Route::resource('api/category','CategoryApiController');
Route::resource('api/user','UserApiController');


