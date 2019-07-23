<?php

use App\Country;
use App\Post;
use App\User;

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


//Route::get('/user/{id}', function($id){
////	return User::find($id)->post;
//	return User::find($id)->posts;
//});
//
//Route::get('/posts/{id}', function($id){
//	return Post::find($id)->user->name;
//});

//Route::get('/user/{id}/role', function($id){
//	$user = User::find($id);
//	foreach($user->roles as $user_role){
//		echo $user_role->name;
//	}
//	return User::find($id)->roles->name;

Route::get('/user/{id}/country', function($id){
	$country = Country::find($id);

	foreach ($country->posts as $post){
		echo $post->title.'<br>';
	}
});