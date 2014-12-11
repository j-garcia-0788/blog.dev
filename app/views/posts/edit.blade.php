@extends ('layouts.master')

@section ('content')

	<h2 align="center">Edit Post</h2>
		<div class="col-md-6">
        	<div class="row">
		       	{{ Form::model($post, (array('action' => ['PostsController@update', $post->id], 'method' => 'PUT'))) }}
					<div class="form-group">
						<label for="title" class="edit-title">Title</label>
					    <input type="text" class="form-control" name="title" value="{{{ $post->title }}}" id="blogTitle" placeholder="Title">
					</div>
					<div class="form-group">
					    <label for="body" class="edit-body">Body</label>
					    <textarea name="body" rows="4" class="form-control">{{{ $post->body }}}</textarea>
					</div>
					<button type="submit" class="btn btn-success btn-sm">Save</button>
				{{ Form::close() }}	
			</div>
			<div class="row"> 
		        {{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'class' => 'form-horizontal', 'id' => 'delete-form')) }}
		           
		            {{ Form::submit('Delete!', (array('class' => 'btn btn-danger btn-sm')))}}
		        
		        {{ Form::close() }}
		    </div>
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