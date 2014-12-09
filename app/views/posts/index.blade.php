@extends ('layouts.master')

@section ('content')

<div id="background" class="container" align="center">
	<h2 align="center">Blog Posts</h2>
		<br>
		@foreach ($posts as $post)
			<div class="individual-post">
				<ul>
					<li class='blog_post'>
						<h3> {{$post->title}} </h3>
						<p class='created_on'>Created on: {{$post->created_at}} </p>
						<p> by {{{ $post->user->email }}} </p>
						<p class='blog_body'> {{ substr($post->body, 0, 200)}} ...</p>

						<div class="index_button_div">
							<a class='btn btn-primary btn-xs index_button' href="{{ action('PostsController@show', $post->id) }}">Preview</a>
							<a  class='index_button' href="{{ action('PostsController@edit', $post->id) }}"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a>
						</div>
				<button class="btn btn-danger btn-sm delete-btn" data-post-id="{{{ $post->id }}}">Delete</button>
			</div>
			<hr>
		@endforeach
				
		{{ Form::open(['method' => 'delete', 'id' => 'delete-form']) }}
	 	{{ Form::close() }}

		{{ $posts->links() }}		
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