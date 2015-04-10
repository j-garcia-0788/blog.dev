@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-2">
	<div class="container">
    	<h2>{{ $post->title }}</h2>
    	<div class="col-lg-12 text center">
			<h3>{{ $post->body }}</h3>
		</div>
		<h3>Created on: {{ date("F d, Y",strtotime($post->created_at)) }}</h3>
  		<div class="col-lg-12 text-center">
			@if (Auth::check())
				<a class='btn btn-success btn-sm' href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
			<a class='btn btn-info btn-sm' href="{{ action('PostsController@index') }}">Show Blog</a>
				<a class='btn btn-danger btn-sm' href="{{ action('PostsController@destroy', $post->id) }}">Delete Post</a>
			@endif
		</div>
	</div>
</section>

@stop