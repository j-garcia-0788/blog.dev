@extends ('layouts.master')

@section ('content')

	<div class="heading">
		<section class="module parallax parallax-1 parallax-window">
			<div class="container">
				<h1>James Garcia</h1>
				<h2>Laravel, MySQL, PHP, HTML, CSS, Javascript, jQuery, Bootstrap, Photoshop</h2>
			</div>
		</section>
	</div>

	<section class="content" id="blog">
		<div class="container">
			<div class="title">
				<strong>Blog Posts</strong>
			</div>
				
			@foreach ($posts as $post)
				<div class="col-md-4 post text-center">
					<p class="posttitle"><strong> {{$post->title}} </strong></p>
					<div class="row">
						<a class='blogbtn' href="{{ action('PostsController@show', $post->id) }}">View Post</a>
					</div>
				</div>
			@endforeach
				
			<div class="row">
		    	{{ $posts->links() }}
		    </div>
		</div>
	</section>

	<section class="module parallax parallax-1 parallax-window" id="portfolio">
	 	<div class="container">
	    	<h1>My Portfolio</h1>
	    	<div class="row">
	    		<div class="col-md-6" id="box1">
					<h2><a href="/whackamole/whack.html"><img src="/whackamole/jurassiclogo.jpg" height="" width="" class="img-circle"></a><br>Whack-a-Logo Game</h2>
				</div>
				<div class="col-md-6" id="box2">
					<h2><a href="http://worldmentr.org"><img src="/img/globe.png" height="151px" width="" class="img-circle"></a><br>WorldMentr.org</h2>
				</div>
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

		$('.parallax-window').parallax({imageSrc: '../img/rocks.jpg'});
	</script>

@stop