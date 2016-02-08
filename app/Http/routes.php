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

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

//pathmila's
Route::get('abc', 'AbcController@index');
Route::get('view_story','StoryController@viewStory');
//---------------

Route::post('/testDamindu', function(){
    return view('testD');
});


Route::get('/testDamindu', function(){
    return view('testD');
});

//Savidya's
Route::get('search_main', 'searchController@searchMain');
Route::post('login', 'searchController@Login');
Route::post('search_result','searchController@searchResult');
Route::post('register','searchController@Register');

// Authentication routes...
Route::get('auth/login', ['as' => 'login', 'uses' => 'Auth\AuthController@getLogin']);
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@getLogout']);

// Registration routes...
//Route::get('auth/register', ['as' => 'register', 'uses' => 'Auth\AuthController@Register']);


//Route::get('auth/register', function(){
//    return view('auth/register');
//});
//Route::post('auth/register', 'Auth\AuthController@postRegister') ;


Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
