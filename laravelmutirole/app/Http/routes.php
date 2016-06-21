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
    return view('welcome');
});

Route::match(['get', 'post'], 'API/User/checkUser/','UserCheckController@checkUser');

Route::match(['get', 'post'], 'API/User/userLogin/','UserCheckController@userLogin');

Route::match(['get', 'post'], 'API/User/userRegister/','UserCheckController@userRegister');

Route::match(['get', 'post'], 'API/User/userLogout/','UserCheckController@userLogout');


