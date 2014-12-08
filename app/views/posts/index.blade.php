@extends ('layouts.master')

@section ('content')

<link rel="stylesheet" href="css/style.css">

<div id="background" class="container" align="center">
	<h2 align="center">Blog Posts</h2>
		<br>
		@foreach ($posts as $post)
			<div>
				<strong>{{ $post->title}}</strong>
			</div>
			<div>
				{{ $post->body}}
			</div>
			<div>
				{{ HTML::link("posts/$post->id", "Go to $post->title", array('class' => 'btn btn-info btn-sm')) }}
			</div>
			<div>

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