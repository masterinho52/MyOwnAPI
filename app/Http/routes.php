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

Route::resource('makers','MakerController',['except'=>['create','edit']]);
Route::resource('vehicles','VehicleController',['only'=>['index']]);
Route::resource('makers.vehicles','MakerVehiclesController',['except'=>['edit','create']]);

//Route::get('/{name?}', 'MyController@index');

//    temp
//Route::get('/{name?}', 'WelcomeController@index');
//
//Route::get('home', 'HomeController@index');
//
//Route::controllers([
//	'auth' => 'Auth\AuthController',
//	'password' => 'Auth\PasswordController',
//]);
