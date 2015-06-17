<?php

View::composer('menu.left', function($view){
    $view->with('menuitems', App\category::all());
});

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

Route::group(['as' => 'dashboard','middleware' => 'auth'], function () {
    Route::get('dashboard/', ['as' => 'index','uses'=>'DashboardController@index']);
    Route::get('dashboard/user/{id}/show', 'UserController@show');
    Route::get('dashboard/user/index', 'UserController@index');
    Route::get('dashboard/user/{id}/edit', 'UserController@edit');
    Route::get('dashboard/user/create', 'UserController@create');
    Route::post('dashboard/user/{id}/update', 'UserController@update');
    Route::post('dashboard/user/store', 'UserController@store');
    Route::get('dashboard/user/{id}/delete', 'UserController@destroy');
    Route::get('dashboard/test', 'TestController@index');

});

Route::get('/category/{id}/show', 'CategoryController@index');
Route::get('/', 'ProductsController@index');

Route::resource('product', 'ProductsController');
Route::resource('indigrient', 'IndigrientController');



