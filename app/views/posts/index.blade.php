@extends ('layouts.master')

@section ('content')
	
	<section class="module parallax parallax-1">
		<div class="container">
			<h1>James Garcia</h1>
			<h2>Linux, Apache, MYSQL, PHP, HTML, CSS, Javascript, Laravel, Bootstrap</h2>
		</div>
	</section>

	<section class="module content" id="blog">
		<div class="container">
			<div class="title"><strong>Blog Posts</strong></div>
				
				@foreach ($posts as $post)
					<div class="col-md-4">
						<div class="post">
							<p><strong> {{$post->title}} </strong></p>
							<p class='blog_body'> {{ substr($post->body, 0, 200) }} ...</p>
							<div class="row">
								{{ Form::open(array('method' => 'delete', 'action' => ['PostsController@destroy', $post->id], 'role' => 'form', 'id' => 'delete-form')) }}
									<a class='btn btn-info btn-xs' href="{{ action('PostsController@show', $post->id) }}">View Post</a>
							    {{ Form::close() }}
							</div>
						</div>
					</div>
				@endforeach
				
			<div class="row">
		    	{{ $posts->links() }}
		    </div>
		</div>
	</section>

	<section class="module parallax parallax-2" id="portfolio">
	 	<div class="container">
	    	<h1>My Portfolio</h1>
    		<div class="text-center" id="box1">
				
				<h2><a href="/whackamole/whack.html"><img src="/whackamole/jurassiclogo.jpg" height="" width="" class="img-circle"></a><br>Whack-a-Logo Game</h2>
			</div>
	  	</div>
	</section>

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