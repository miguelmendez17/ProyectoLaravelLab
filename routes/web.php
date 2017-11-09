<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Make a post request 

Route::get('/', function(){
	return view('welcome');

});

Route::get('/casas/agregar',function(){
	return view('createUSer');
});

Route::post('/casas/login', 'loginController@login');

Route::post('/casas/register', 'loginController@insert');

Route::get('casas/get/{id}', 'CasaController@getCasaByID');

Route::get('casas','CasaController@getListaCasas');

Route::resource('crud','crud');