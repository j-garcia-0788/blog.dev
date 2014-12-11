@extends ('layouts.master')

@section ('content')

<div align="center">
	<h2 align="center">Blog Posts</h2>
		<br>
		<div class="row">
			@foreach ($posts as $post)
				<div class="col-md-4">
					<h3> {{$post->title}} </h3>
					<p class='blog_body'> {{ substr($post->body, 0, 200) }} ...</p>
					<p class='created_on'>Created on: {{$post->created_at}} </p>
					<p> by {{{ $post->user->email }}} </p>

					<div class="row">
					@if (Auth::check())
						{{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'id' => 'delete-form')) }}
							<a class='btn btn-info btn-xs' href="{{ action('PostsController@edit', $post->id) }}">Edit Post</a>
					    	{{ Form::submit('Delete', (array('class' => 'btn btn-danger btn-xs delete-btn')))}}
					    {{ Form::close() }}
					@endif
					</div>
				</div>
			@endforeach
		</div>
	<div class="row">
    	{{ $posts->links() }}
    </div>
</div>






@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-btn').click(function() {
			var postId = $(this).data('post-id');

			$("delete-form").attr('action', '/posts/' + postId);

			if (confirm('Are you sure you want to delete this post?')){
				$("#delete-form").submit();
			}
		});
	</script>

@stop