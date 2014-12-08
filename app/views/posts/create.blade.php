@extends ('layouts.master')

@section ('content')

<div id="background" class="container">

	<h2 align="center">Create blog Posts</h2>

	<div class="col-md-6">
		{{ Form::open(array('action' => 'PostsController@store')) }}
		    
		   	@include('posts.form')

			<div>
		    <input type="submit" class="btb btn-info" name="button">
		    </div>
		{{ Form::close() }}
	</div>
</div>

@stop
    