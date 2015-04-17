@extends ('layouts.master')

@section ('content')

<section class="parallax parallax-window">
	<div class="container">
    	<h2 class="header-text">New Post</h2>
		<div class="newpost">
			{{ Form::open(array('action' => 'PostsController@store')) }}
			    
			   	@include('posts.form')

			    <input type="submit" class="button" name="button">
			   
			{{ Form::close() }}
		</div>
	</div>
</section>

@stop

@section('bottomscript')

	<script type="text/javascript">

		$('.parallax-window').parallax({imageSrc: '/img/rocks.jpg'});
	
	</script>

@stop