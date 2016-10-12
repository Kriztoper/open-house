
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

<<<<<<< HEAD
=======
Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/hall_of_fame', function () {
    return view('hall_of_fame');
});

Route::get('/videos', function () {
    return view('videos');
});

Route::get('/game', function () {
    return view('game');
});

>>>>>>> 79867ab33907be3d86c12efc7872fed2785a5ccf
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
Route::get('/tokens/{tokenCode}'      , 'TokenController@getTokenValue');

?>