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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::get('/', 'HomeController@index');
Route::get('/home', 'AdminController@index');
Route::get('/admin', 'AdminController@index');
// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');
Route::get('/admin/add', 'AdminController@create');
Route::post('/admin', 'AdminController@store');
Route::resource('admin','AdminController');
Route::post('/check', 'HomeController@store');
Route::get('/result/{result}', 'HomeController@result');
Route::post('/admin/delete', 'AdminController@delete');