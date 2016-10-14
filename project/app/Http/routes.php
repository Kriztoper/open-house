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

/**
*   Admin for adding videos and genre to database
*   This will be removed after inserting everything to the database.
*
*/
Route::get('/admin',function(){
   return view('admin.adminPage'); 
});
Route::get('/adminSeries',function(){
    return view('admin.addSeries');
});
Route::get('/adminGenre',function(){
   return view('admin.addGenre'); 
});
Route::get('/adminGame',function(){
	return view('admin.addGame');
});
Route::get('/adminToken',function(){
	return view('admin.addToken');
});

//Route::get('/admin', 'AdminController@show_dashboard');
Route::get('/adminSortGenre','AdminController@getGenre');
Route::get('/adminGameGenre','AdminController@getGameGenre');
Route::post('/adminsSeries','AdminController@saveSeries');
Route::post('/adminsGenre','AdminController@saveGenre');
Route::post('/adminSortsGenre','AdminController@sortGenre');

/**
*   Routes for list of videos and watching videos from database
*
*/
Route::get('/series_list','VideosController@listSeries');
Route::get('/list_video/{id}','VideosController@listVideos');
Route::get('/watch_video/{id}','VideosController@watchVideos');
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
Route::get('/videos','VideosController@listSeries');
Route::group(['middleware' => 'auth'], function () {
    // place your route definitions here
    Route::get('/dashboard'   , 'UserController@show_dashboard');
	Route::get('/hall_of_fame', 'UserController@show_hall_of_fame');
	Route::get('/profile'     , 'UserController@show_profile');
	Route::get('/developers'  , 'UserController@show_developers');
	Route::get('/game'        , 'UserController@show_games');
	Route::post('/tokens'     , 'UserController@add_token');
	//Route::get('/videos'      , 'UserController@show_videos');
});
?>
