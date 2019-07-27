<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostFormRequest;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$posts = Post::all();
		return view('posts.index', compact('posts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostFormRequest $request)
    {
//    	$validateData = $request->validate([
//    		'title' => 'required|max:15',
//			'body' => 'required',
//			'number' => 'numeric',
//			'check' => 'accepted',
//		]);

    	$post = new Post;
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();

    	return redirect('/', 303);

//    	$input['title'] = $request->title;
//    	$input['body'] = $request->body;

//    	return $input;
//		Post::create($input);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {

    	$post = Post::findOrFail($id);
    	return view('posts.edit', compact('post'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
    	$post = Post::findOrFail($id);
    	$post->title = $request->title;
    	$post->body = $request->body;
    	$post->save();

    	return redirect('/posts', 303);

//        return $request;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/posts', 303);
    }
}
