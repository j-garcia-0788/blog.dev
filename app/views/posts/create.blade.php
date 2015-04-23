@extends ('layouts.master')

@section ('content')

<div class="parallaxscroll parallax-window">
	<div class="container">
    	<h2 class="header-text">New Post</h2>
		<div class="newpost">
			{{ Form::open(array('action' => 'PostsController@store')) }}
			    
			   	@include('posts.form')
			   	<div class="blogbutton">
			    	<input type="submit" class="button" name="button">
			   	</div>
			{{ Form::close() }}
		</div>
	</div>
</div>

@stop

@section('bottomscript')

	<script type="text/javascript">

		$('.parallax-window').parallax({imageSrc: '/img/rocks.jpg'});
	
	</script>

@stop