@extends ('layouts.master')

@section ('content')

	<h2 align="center">New Post</h2>

	<div class="col-md-6 col-md-offset-3 text-center">
		{{ Form::open(array('action' => 'PostsController@store')) }}
		    
		   	@include('posts.form')

			<div>
		    <input type="submit" class="btn btn-info" name="button">
		    </div>
		{{ Form::close() }}
	</div>

@stop