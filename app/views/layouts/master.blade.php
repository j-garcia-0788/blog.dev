<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>James' Site</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
		
		<link rel="stylesheet" href="/css/style.css">

		<!-- Compiled and minified CSS -->
		<!-- <link rel="stylesheet" href="/css/materialize.css">-->

          

		<style type="text/css">
			@import url(//fonts.googleapis.com/css?family=Lato:700);
		</style>

	</head>
	<body>

		@include ('partials.navbar')
		
		<div class="allcontent">
			<div class="flash">
				@if (Session::has('successMessage'))
				    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
				@endif
				@if (Session::has('errorMessage'))
				    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
				@endif
			</div>
		
	    	@yield('content')
	    </div>
		
		@include ('partials.footer')

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		
		<script src="/js/parallax.js"></script>
		
		<!-- Compiled and minified JavaScript -->
		<!--<script src="/js/materialize.js"></script> -->

		@yield('bottomscript')
		
	</body>

</html>