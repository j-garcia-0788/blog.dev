@extends ('layouts.master')

@section ('content')

<div class="text-center">
	<div class="row">
		<div class="col-lg-12">
			<img src="img/me.jpg" class="img-circle" height="350px">
		</div>
	</div>
	<h2 class="text-center">Blog Posts</h2>
		<br>
			@foreach ($posts as $post)
				<div class="col-md-6">
					<h3> {{$post->title}} </h3>
					<p class='blog_body'> {{ substr($post->body, 0, 200) }} ...</p>
					<p class='created_on'>Created on: {{ date("d F Y",strtotime($post->created_at)) }} </p>
					<p> by {{{ $post->user->email }}} </p>

					<div class="row">
						{{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'id' => 'delete-form')) }}
							<a class='btn btn-info btn-xs' href="{{ action('PostsController@show', $post->id) }}">View Post</a>
							@if (Auth::check())
					    	{{ Form::submit('Delete', (array('class' => 'btn btn-danger btn-xs delete-btn')))}}
					    	@endif
					    {{ Form::close() }}
					</div>
				</div>
			@endforeach
	<div class="row">
    	{{ $posts->links() }}
    </div>
</div>






@stop

@section('bottomscript')
	<script type="text/javascript">
		$('.delete-btn').click(function() {
			var postId = $(this).data('post-id');

			$("#delete-form").attr('action', '/posts/' + postId);

			if (confirm('Are you sure you want to delete this post?')){
				$("#delete-form").submit();
			}
		});
	</script>

@stop