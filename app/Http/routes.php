<?php

View::composer('menu.left', function($view){
    $view->with('menuitems', App\category::all()->where('active',1));
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

    // for category
    Route::get('dashboard/category/{id}/show', 'DashboardController@categoryshow');
    Route::get('dashboard/category/{id}/edit', 'DashboardController@categoryedit');
    Route::get('dashboard/category/{id}/delete', 'DashboardController@categorydelete');
    Route::get('dashboard/category/index', 'DashboardController@categoryindex');
    Route::get('dashboard/category/create', 'DashboardController@indicreate');

    // for product
    Route::get('dashboard/product/{id}/show', 'DashboardController@productshow');
    Route::get('dashboard/product/{id}/edit', 'DashboardController@productedit');
    Route::get('dashboard/product/{id}/delete', 'DashboardController@productdelete');
    Route::get('dashboard/product/index', 'DashboardController@productindex');
    Route::get('dashboard/product/create', 'DashboardController@productcreate');
    Route::post('dashboard/product/store', 'DashboardController@productstore');


    //for indigrient
    Route::get('dashboard/indi/{id}/show', 'DashboardController@indishow');
    Route::get('dashboard/indi/{id}/edit', 'DashboardController@indiedit');
    Route::get('dashboard/indi/{id}/delete', 'DashboardController@indidelete');
    Route::get('dashboard/indi/index', 'DashboardController@indiindex');
    Route::get('dashboard/indi/create', 'DashboardController@indicreate');

    //for indigrient
    Route::get('dashboard/categoryingr/{id}/show', 'DashboardController@catingshow');
    Route::get('dashboard/categoryingr/{id}/edit', 'DashboardController@catingedit');
    Route::get('dashboard/categoryingr/{id}/delete', 'DashboardController@indicatingdelete');
    Route::get('dashboard/categoryingr/index', 'DashboardController@catingindex');
    Route::get('dashboard/categoryingr/create', 'DashboardController@catingcreate');

    Route::get('/dashboard/product/{id}/attradd', 'DashboardController@attradd');
    Route::post('/dashboard/attr/add', 'DashboardController@attrsave');

});

Route::get('/category/{id}/show', 'CategoryController@index');
Route::get('/', 'ProductsController@index');
Route::post('/cart/add', 'ProductsController@CartAdd');
Route::get('/my/cart', 'UserController@MyCart');

Route::resource('product', 'ProductsController');
Route::resource('indigrient', 'IndigrientController');



