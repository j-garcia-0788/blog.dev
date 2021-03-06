<?php

class PostsController extends \BaseController 
{
	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
		// $this->beforeFilter(function(){
		// 	if(Auth::user()->role_id != 1){
		// 		return Redirect::to('/');
		// 		} 
		// 	}, array('except' => array('index', 'show')));
	}
	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		$query  = Post::with('user');
		$search = Input::get('search');

		if(!is_null($search)){	
			$query->where('title', 'LIKE', "%{$search}%")
				  ->orWhere('body', 'LIKE', "%{$search}%");
		}
		
		$posts = $query->orderBy('created_at', 'desc')->paginate(6);

		return View::make('posts.index')->with(array('posts' => $posts))->with('search', $search);
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
		$post = new Post();

		return $this->savePost($post);
	}
	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		try {
	 		$post = Post::find($id);
		} catch(Exception $e){
			App::about(404);
		}

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
		$post = Post::findOrFail($id);

		$validator = Validator::make($data = Input::all(), Post::$rules);

		if ($validator->fails())
		{
			Session::flash('errorMessage', "Post not saved, try again!");
			return Redirect::back()->withErrors($validator)->withInput();
		} else {
			$post = Post::find($id);
			$post->title = Input::get('title');
			$post->body = Input::get('body');
			$post->save();

			Session::flash('successMessage', "Post is saved!");

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
		Post::destroy($id);

		return Redirect::route('posts.index');
	}

	protected function savePost(Post $post)
	{
		// create the validator
   		$validator = Validator::make(Input::all(), Post::$rules);
		
			// attempt validation
	    if ($validator->fails())
	    {
			Session::flash('errorMessage', "Post not saved, try again!");   
	        return Redirect::back()->withInput()->withErrors($validator);
	    } else {
			$posts = new Post();
			
			$posts->title = Input::get('title');
			$posts->body = Input::get('body');
			$posts->user_id = Auth::id();
		}
		$posts->save();
		
		Session::flash('successMessage', "Post is saved!");

		return Redirect::action('PostsController@show', $posts->id);
	}
}
