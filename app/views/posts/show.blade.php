@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-2">
	<div class="container">
    	<h2>{{ $post->title }}</h2>
    	<div class="col-lg-12 text center">
			<h3>{{ $post->body }}</h3>
		</div>
		<h3>Created on: {{ date("F d, Y",strtotime($post->created_at)) }}</h3>
  		<div class="row">
	  		<div class="col-lg-4">
				@if (Auth::check())
					<a class='button' href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
				@endif
			</div>
			<div class="col-lg-4">
				<a class='button' href="{{ action('PostsController@index') }}">Show Blog</a>
			</div>
			<div class="col-lg-4">
				@if (Auth::check())
					{{ Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
						{{ Form::submit('Delete', ['class' => 'deletebtn']) }}
					{{ Form::close() }}
				@endif
			</div>
		</div>
	</div>
</section>

@stop