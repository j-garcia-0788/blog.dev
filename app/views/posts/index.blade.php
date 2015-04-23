@extends ('layouts.master')

@section ('content')

	<div class="heading">
		<div class="parallaxscroll parallax-window">
			<div class="content" id="blog">
				<div class="container">
					<div class="title">
						<h1>Blog Posts</h1>
					</div>
						
					@foreach ($posts as $post)
						<div class="col-md-4">
							<div class="post">
								<p class="posttitle"><strong> {{$post->title}} </strong></p>	
								<a class='blogbtn' href="{{ action('PostsController@show', $post->id) }}">View Post</a>
							</div>
						</div>
					@endforeach
						
					<div class="row">
				    	{{ $posts->links() }}
				    </div>
				</div>
			</div>
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

		$('.parallax-window').parallax({imageSrc: '../img/rocks.jpg'});
	</script>

@stop