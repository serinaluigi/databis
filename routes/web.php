<?php

/** @var \Laravel\Lumen\Routing\Router $router */

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

Route::get('/users', 'MainController@getUsers');
//index
Route::get('/', 'MainController@index');   
Route::post('/', 'MainController@addUser');  
Route::get('/login', 'LoginController@login'); 
Route::get('/test', 'LoginController@result');
Route::get('/{id}', 'MainController@show'); 
Route::put('/{id}', 'MainController@update'); 
Route::patch('/{id}', 'MainController@update'); 
Route::delete('/{id}', 'MainController@delete'); 
