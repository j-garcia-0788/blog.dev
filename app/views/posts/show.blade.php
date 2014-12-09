@extends ('layouts.master')

@section ('content')

<div id="background" class="container">
	<h2 align="center">Edit blog Posts</h2>
		<div class="col-md-6">
			{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method'=> 'PUT')))}}
			   
				@include('posts.form')

			    <div>
			    <input type="submit" class="btb btn-info" name="button">
			    </div>

			{{ Form::close() }}
			{{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'delete-form')) }}
			 	{{ Form::submit('Delete', (array('class' => 'btn btn-danger btn-xs')))}}
			 {{ Form::close() }}
		</div>
</div>

@stop

@section('bottomscript')
	<script type="text/javascript">
		$('#delete-form').submit(function(e) {
			if (!confirm('Are you sure you want to delete this post?')){
				e.preventDefault();
			}
		});
	</script>
@stop