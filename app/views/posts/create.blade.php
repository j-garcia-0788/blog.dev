@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-2">
	<div class="container">

    	<h2>New Post</h2>

		<div class="col-md-6 col-md-offset-3 text-center">
			{{ Form::open(array('action' => 'PostsController@store')) }}
			    
			   	@include('posts.form')

				<div>
			    <input type="submit" class="button" name="button">
			    </div>
			{{ Form::close() }}
		</div>

	</div>
	
</section>

@stop