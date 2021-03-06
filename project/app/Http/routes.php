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

Route::get('login', function () {
    return view('auth.login');
});
Route::get('uploads', function () {
    return view('appviews.uploads');
});

Route::get('/','PagesController@home');
Route::post('/upload','ImageController@upload');
Route::auth();
Route::get('/home', 'HomeController@index');

