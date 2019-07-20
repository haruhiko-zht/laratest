<?php

use App\Post;

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


Route::get('/', 'HomeController@index')->name('home');
Route::get('/posts', 'PostsController@index')->name('posts');

Route::get('/posts/{id}', function($id){
//	$posts = Post::all();
//	$post = Post::find($id);
//	$posts = Post::orderBy('id', 'asc')->get();
//	$posts = Post::where('is_admin', 1)
//		->where('votes', '=', 5)
//		->get();
//	$posts = Post::all()->first();
//	$posts = Post::find([1,3])->take(2);
//	return $posts;

//	$post = new Post;
//	$post->title = 'Japan is awesome';
//	$post->body = 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.';
//	$post->votes = 5;
//	$post->is_admin = 1;
//	$post->save();

//	$posts = Post::find(1);
//	$posts->title = 'Awesome Ninjas';
//	$posts->save();

//	$posts = Post::where('is_admin',1)->update([
//		'votes' => 100
//	]);

//	Post::create([
//		'title' => 'Mass Assignment',
//		'body' => 'hello Ninja',
//		'votes' => 22,
//		'is_admin' =>1,
//	]);

//	$post = Post::find(4);
//	$post->delete();

//	Post::destroy(5);

//	Post::destroy([1,2,3]);

//	$post = Post::find(3);
//	$post->delete();

//	$post = Post::all();
//	$post = Post::withTrashed()->get();
//	$post = Post::onlyTrashed()->get();
	$post = Post::onlyTrashed()->where('id',3)->forceDelete();
	return $post;
});