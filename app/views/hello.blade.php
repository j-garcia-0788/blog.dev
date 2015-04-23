@extends ('layouts.master')

@section ('content')

	<div class="heading">
		<div class="parallax parallax-window">
			<div class="container">
				<h1>James Garcia</h1>
				<h2>Laravel, MySQL, PHP, HTML, CSS, Javascript,
				jQuery, Bootstrap, Photoshop</h2>
			</div>
		</div>
	</div>
	
	<div class="content">
		<h3>Experience</h3>
		<div class="experienceboxes">
			<div class="box1">
				<h3 class="experience">Back End</h3>
				<p>Through PHP I have been able to write web apps that can capture user information and send it to a SQL database, then send it back to the application. My blog uses this skill and gives you an idea of my interests and the awesome place that is mind.</p>
			</div>
			<div class="box2">
				<h3 class="experience">Front End Design</h3>
				<p>Through PHP I have been able to write web apps that can capture user information and send it to a SQL database, then send it back to the application. My blog uses this skill and gives you an idea of my interests and the awesome place that is mind.</p>
			</div>
		</div>
	</div>
	
	<div class="portfolio" id="portfolio">
    	<h1 class="portfolioheading">My Portfolio</h1>
    	<div class="row">
    		<div class="col-md-6" id="box1">
				<h2 class="portfolioheading"><a href="/whackamole/whack.html"><img src="/whackamole/jurassiclogo.jpg" height="" width="" class="img-circle"></a><br>Whack-a-Logo Game</h2>
			</div>
			<div class="col-md-6" id="box2">
				<h2 class="portfolioheading"><a href="http://worldmentr.org"><img src="/img/globe.png" height="151px" width="" class="img-circle"></a><br>WorldMentr.org</h2>
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
