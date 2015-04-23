@extends ('layouts.master')

@section ('content')

<div class="parallaxscroll parallax-window">
	<div class="container">
		<div class="newpost">
	       	{{ Form::open(array('method' => 'PUT', 'action' => ['PostsController@update', $post->id], 'role' => 'form')) }}
				<div class="form-group">
					<label for="title" class="header-text"><h2>Title</h2></label>
				    <input type="text" class="form-control" name="title" value="{{{ $post->title }}}" id="blogTitle" placeholder="Title">
				</div>
				<div class="form-group">
				    <label for="body" class="edit-body"><h3>Body</h3></label>
				    <textarea name="body" rows="4" class="form-control">{{{ $post->body }}}</textarea>
				</div>
				<div class="blogbutton">
					<button type="submit" class="button">Save</button>
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