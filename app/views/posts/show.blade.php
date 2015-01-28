@extends ('layouts.master')

@section ('content')

	<h2 class="text-center">{{ $post->title }}</h2>
		<div class="col-md-12 text-center">	
			<div class="row"> 
				<div class="col-lg-12 text center">
					<p>{{ $post->body }}</p>
				</div>
			</div>
			<br>
			<div class="col-lg-12 text-center">
				<a class='btn btn-success btn-sm' href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
				<a class='btn btn-info btn-sm' href="{{ action('PostsController@index') }}">Show Blog</a>
			</div>
		</div>
</div>

@stop