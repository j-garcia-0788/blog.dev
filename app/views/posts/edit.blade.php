@extends ('layouts.master')

@section ('content')

<div id="background" class="container">
	<h2 align="center">Edit blog Posts</h2>
		<div class="col-md-6">
			{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method'=> 'PUT')))}}
			    <div class="form-group">
			    {{ $errors->first('title', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a title.</div></span>') }}
			    	<input type="text" name="title" value="{{{ $post->title }}}" placeholder="Title">
			    
			    </div>
			    <div class="form-group">
			    {{ $errors->first('body', '<span class="help-block"><div class="alert alert-danger" role="alert">Must have a title.</div></span>') }}
			    	<textarea name="body" class="form-control" rows="3" value="{{{ $post->body }}}" placeholder="Body"></textarea>
			    <div>
			    <input type="submit" class="btb btn-info btn-sm" name="button">

			    {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'delete-form')) }}
			    {{ Form::submit('Delete', (array('class' => 'btn btn-danger btn-sm')))}}
			    {{ Form::close() }}
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