<?php

class PostsController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$posts = Post::paginate(2);
		// $data = [
		// 	'posts' => $post
		// ];
		return View::make('posts.index')->with('posts', $posts);
	}


	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		return View::make('posts.create');
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// create the validator
   		$validator = Validator::make(Input::all(), Post::$rules);
		
			// attempt validation
	    if ($validator->fails()) {
	        
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {	
				$posts = new Post();
				
				$posts->title = Input::get('title');
				$posts->body = Input::get('body');
				
				$posts->save();
				
				return Redirect::action('PostsController@index', $posts->id);
			}
	}



	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		$post = Post::find($id);
		return View::make('posts.show')->with('post', $post);
	}


	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		$post = Post::find($id);

		return View::make('posts.edit')->with('post', $post);
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		// create the validator
   		$validator = Validator::make(Input::all(), Post::$rules);
		
			// attempt validation
	    if ($validator->fails()) {
	        
	        return Redirect::back()->withInput()->withErrors($validator);

	    } else {	
		$post = Post::find($id);
		$post->title = Input::get('title');
		$post->body = Input::get('body');
		$post->save();

		return Redirect::action('PostsController@show', $post->id);
	}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::find($id);
		$post->delete();
	}


}
