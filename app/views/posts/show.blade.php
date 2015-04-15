@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-1 parallax-window">
	<div class="container">
    	<h2 class="header-text">{{ $post->title }}</h2>
    	<div class="col-lg-12 text center">
			<h3>{{ $post->body }}</h3>
		</div>
		<h3>Created on: {{ date("F d, Y",strtotime($post->created_at)) }}</h3>
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
				<a class='deletebtn' id="delete" href="#">Delete</a>
				{{ Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
				{{ Form::close() }}
			@endif
		</div>
	</div>
</section>

@stop

@section('bottomscript')

	<script type="text/javascript">
		$('#delete').click(
			function()
			{
				$('#delete-form').submit();
			}
		);
		$('#delete-form').submit(function(e) {
			if (!confirm('Are you sure you want to delete this post?')){
				e.preventDefault();
			}
		});
		$('.parallax-window').parallax({imageSrc: '../img/rocks.jpg'});
	</script>

@stop