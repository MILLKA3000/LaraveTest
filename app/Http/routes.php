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

Route::get('/', function () {return view('welcome');});
//Route::get('test', ['as'=>'index','uses'=>'TestController@index']);

Route::group(['as' => 'test'], function () {
    Route::get('test', ['as' => 'index','uses'=>'TestController@index']);
    Route::get('name/{name}', function ($name) {
        return $name;
    })->where('name', '[a-z]+');
});



Route::get('user/{id}/profile', ['as' => 'profile','uses'=>'TestController@index', function ($id) {

}]);



$url = route('profile', ['id' => 1]);