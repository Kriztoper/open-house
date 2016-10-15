
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
// Forget Password routes
Route::controllers([
   'password' => 'Auth\PasswordController',
]);

Route::get('/developers',function(){
    return view('user.developers');
});
// Authentication routes...
Route::get('/'          , 'Auth\AuthController@getLogin');
Route::get('/login'     , 'Auth\AuthController@getLogin');
Route::post('/login'    , 'Auth\AuthController@postLogin');
Route::get('/logout'    , 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('/register'  , 'Auth\AuthController@getRegister');
Route::post('/register' , 'Auth\AuthController@postRegister');

// Routes for normal user
Route::get('/dashboard'   , 'UserController@show_dashboard');
Route::get('/hall_of_fame', 'UserController@show_hall_of_fame');
Route::get('/profile'     , 'UserController@show_profile');
Route::post('/tokens'	  , 'UserController@add_token');
Route::get('/game'        , 'GamesController@listGames');

// Admin routes
Route::get('/admin'           , 'AdminController@show_dashboard');
Route::get('/adminSeries'     , 'AdminController@show_add_series');
Route::get('/adminGenre'      , 'AdminController@show_add_genres');
Route::get('/adminGame'       , 'AdminController@show_add_games');
Route::get('/adminToken'      , 'AdminController@show_add_tokens');
Route::get('/adminSortGenre'  , 'AdminController@getGenre');
Route::get('/adminGameGenre'  , 'AdminController@getGameGenre');
Route::post('/adminGameGenre' , 'AdminController@sortGameGenre');
Route::post('/adminGame'      , 'AdminController@addGame');
Route::post('/adminsSeries'   , 'AdminController@saveSeries');
Route::post('/adminsGenre'    , 'AdminController@saveGenre');
Route::post('/adminSortsGenre', 'AdminController@sortGenre');
Route::post('/addToken'       , 'AdminController@generateToken');
Route::get('/playGame/{id}'   , 'GamesController@playGame');

// video functionality
Route::get('/series_list'     , 'VideosController@listSeries');
Route::get('/list_vid'        , 'VideosController@show_list_vid');
Route::get('/watch_video/{id}', 'VideosController@watchVideos');
Route::get('/videos'          , 'VideosController@listSeries');
Route::get('/list_video/{id}' , 'VideosController@listVideos');
Route::get('/watch_video/{id}', 'VideosController@watchVideos');
Route::get('/videos'          , 'VideosController@listSeries');

//Time_Usage in progress
Route::get('/times'           , 'UserController@show_Time');

/*the next two lines are temporary, used for testing*/
Route::get('/buyVid/{videoID}', 'TokenController@buy_video');
Route::get('/buyGame/{gameID}', 'TokenController@buy_game');


//	Admin
Route::get('/admin', 'AdminController@show_dashboard');

?>

