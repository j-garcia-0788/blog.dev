<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<link rel="stylesheet" href="/css/style.css">

</head>
<body>

	@include ('partials.navbar')
	
	@if (Session::has('successMessage'))
	    <div class="alert alert-success">{{{ Session::get('successMessage') }}}</div>
	@endif
	@if (Session::has('errorMessage'))
	    <div class="alert alert-danger">{{{ Session::get('errorMessage') }}}</div>
	@endif

    @yield('content')
	
	
    <div class="container text-center" id="footer">
	    <p>Made by James Garcia</p>
	</div>

	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>

	@yield('bottomscript')
</body>
</html>