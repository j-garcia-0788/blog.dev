<!DOCTYPE html>
<html lang="en">
<head>
    <title>Laravel Blog</title>
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap-theme.min.css">

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
	
	<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
</head>
<body>


	<div class="container">
		@include ('partials.navbar')
	    @yield('content')
	</div>

</body>
</html>