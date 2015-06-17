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
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::group(['as' => 'test','middleware' => 'auth'], function () {
    Route::get('/', ['as' => 'index','uses'=>'UserController@index']);
    Route::get('/user/{id}/show', 'UserController@show');
    Route::get('/user/{id}/index', 'UserController@index');
    Route::get('/user/{id}/edit', 'UserController@edit');
    Route::get('/user/create', 'UserController@create');
    Route::post('/user/{id}/update', 'UserController@update');
    Route::post('/user/store', 'UserController@store');
    Route::get('/user/{id}/delete', 'UserController@destroy');
    Route::get('/test', 'TestController@index');

});

Route::get('/product/{id}/category', 'ProductsController@index');
Route::resource('product', 'ProductsController');

Route::resource('indigrient', 'IndigrientController');



