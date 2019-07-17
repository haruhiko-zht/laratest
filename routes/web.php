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

//Route::resources([
//	'contact' => 'ContactController',
//	'user' => 'UserController',
//]);

//Route::resource('contact', 'ContactController');

//Route::resource('contact', 'ContactController')->only([
//	'index','show'
//]);

Route::get('contact/{user}/{age}/{name}', 'ContactController@index');

Route::resource('contact', 'ContactController')->except([
	'create','store','update','destroy',
])->names([
	'edit'=>'contact.superawesome'
]);