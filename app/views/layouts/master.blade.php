<!DOCTYPE html>
<html lang="en">
	<head>
	    <title>James' Site</title>
		
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap-theme.min.css">
		
		<link rel="stylesheet" href="/css/style.css">

		<style type="text/css">
			@import url(//fonts.googleapis.com/css?family=Lato:700);
		</style>

	</head>
	<body>

		@include ('partials.navbar')
		
		<div class="text-center">
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
		
		<footer class="footer">
		    <div class="span3">
		      <h4>James Garcia</h4>
		    </div>
		</footer>

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>

		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
		
		<script src="/js/parallax.js"></script>

		@yield('bottomscript')
		
	</body>

</html>