@extends ('layouts.master')

@section ('content')

	<div class="parallax parallax-window">
		<div class="container">
	    	<div class="newpost" id="blog">
		    	<div class="userbuttons">
			    	<div class="userbutton1">
						@if (Auth::check())
							<div class="blogbutton">
								<a class='deletebtn' id="delete" href="#">Delete</a>
								{{ Form::open(['action' =>['PostsController@destroy', $post->id], 'method' => 'delete', 'id' => 'delete-form']) }}
								{{ Form::close() }}
							</div>
						@endif
					</div>
					<div class="userbutton2">
			  			<div class="blogbutton">
							@if (Auth::check())
								<a class='button' href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
							@endif
						</div>
					</div>
				</div>
		    	<h3>{{ $post->title }}</h3>
		    	<div class="">
					<h3>{{ $post->body }}</h3>
				</div>
				<h4>Created on: {{ date("F d, Y",strtotime($post->created_at)) }}</h4>
				<div class="postbuttons">
					<div class="">
						<div class="blogbutton">
							<a class='button' href="{{ action('PostsController@index') }}">Show Blog</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@stop

@section('bottomscript')

	<script type="text/javascript">
		$('#delete').click(
			function() {
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