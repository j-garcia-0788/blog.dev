@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-1 parallax-window">
	<div class="container">
    	<h2>New Post</h2>
		<div class="col-md-6 col-md-offset-3 text-center">
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