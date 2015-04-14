@extends ('layouts.master')

@section ('content')

<section class="module parallax parallax-1 parallax-window">
	<div class="container">
		<div class="col-md-6 col-md-offset-3">
	    	<div class="row">
		       	{{ Form::open(array('method' => 'PUT', 'action' => ['PostsController@update', $post->id], 'role' => 'form')) }}
					<div class="form-group">
						<label for="title" class="edit-title"><h3>Title</h3></label>
					    <input type="text" class="form-control" name="title" value="{{{ $post->title }}}" id="blogTitle" placeholder="Title">
					</div>
					<div class="form-group">
					    <label for="body" class="edit-body"><h3>Body</h3></label>
					    <textarea name="body" rows="4" class="form-control">{{{ $post->body }}}</textarea>
					</div>
					<div class="row">
						<button type="submit" class="button">Save</button>
			        </div>	
				{{ Form::close() }}	
			</div>
		</div>
	</div>
</section>

@stop

@section('bottomscript')

	<script type="text/javascript">

		$('.parallax-window').parallax({imageSrc: '/img/rocks.jpg'});

	</script>
@stop