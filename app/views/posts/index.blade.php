@extends ('layouts.master')

@section ('content')

<h2 align="center">Blog Posts</h2>
	
	<div>
	{{ HTML::link("posts/create", "New Blog Post", array('class' => 'btn btn-success')) }}
	</div>
	<br><br>
	@foreach ($posts as $post)
	<div>
		<strong>{{ $post->title}}</strong>
	</div>
	<div>
		{{ $post->body}}
	</div>
	<p>
		{{ HTML::link("posts/$post->id", "Go to $post->title", array('class' => 'btn btn-info btn-sm')) }}
	</p>
	@endforeach

	{{ $posts->links() }}

@stop