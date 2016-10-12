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
*	Author: Khalile Pujante
*	Working login and registration routes
*	Stable
*/ 

// Default landing page
Route::get('/', 'Auth\AuthController@getLogin');

// Authentication routes...
Route::get('/', 'Auth\AuthController@getLogin');
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');

// Forget Password routes
Route::controllers([
   'password' => 'Auth\PasswordController',
]);


// Routes for user dashboard
Route::get('/dashboard'   , 'UserController@show_dashboard');
Route::get('/hall_of_fame', 'UserController@show_hall_of_fame');
Route::get('/profile'     , 'UserController@show_profile');
Route::get('/developers'  , 'UserController@show_developers');
Route::get('/game'        , 'UserController@show_games');
Route::post('/tokens'     , 'UserController@add_token');
Route::get('/videos'      , 'UserController@show_videos');

//Admin
Route::get('/admin', 'AdminController@show_dashboard');
?>