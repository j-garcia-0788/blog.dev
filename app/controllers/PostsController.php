<?php

class PostsController extends \BaseController 
{
	public function __construct()
	{
		parent::__construct();

		$this->beforeFilter('auth', array('except' => array('index', 'show')));
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
		
		$posts = $query->orderBy('created_at', 'desc')->paginate(3);

		return View::make('posts.index')->with('posts', $posts)->with('search', $search);
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
		$post = Post::find($id);

		return $this->savePost($post);
	}
	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		$post = Post::findOrFail($id);
		$post->delete();
		
		return Redirect::action('PostsController@index', $post->id);
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
	    }
		$posts = new Post();
		
		$posts->title = Input::get('title');
		$posts->body = Input::get('body');
		$posts->user_id = Auth::id();

		$posts->save();
		
		Session::flash('successMessage', "Post saved. Sweet Peas!");

		return Redirect::action('PostsController@index', $posts->id);
	}
}
