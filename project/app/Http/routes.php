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

Route::get('/home', function () {
    return view('welcome');
});

Route::get('/project', function () {
    return view('project');
});

Route::get('/register', 'RegistrationController@create');
Route::get('/register', 'RegistrationController@create');
Route::post('/register/done', 'RegistrationController@store');
