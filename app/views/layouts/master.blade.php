<!DOCTYPE html>
<html lang="en">
<head>
    <title>James' Site</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">
	
	<link rel="stylesheet" href="/css/style.css">

</head>
<body>

	@include ('partials.navbar')
	
	<div id="background" class="container">
		@if (Session::has('successMessage'))
		    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
		@endif
		@if (Session::has('errorMessage'))
		    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
		@endif
	
    	@yield('content')
	</div>
	
	<footer class="footer">
	    <div class="footer">
		    <div class="span3">
	          <h4 class="whitetxt">James Garcia</h4>
	        </div>
		</div>
	</footer>
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('bottomscript')
</body>
</html>