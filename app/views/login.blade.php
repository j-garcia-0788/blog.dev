@extends ('layouts.master')

@section('content')

<section class="module parallax parallax-1 parallax-window">
 	<div class="container">
    	<h2>Login:</h2>
		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				{{ Form::open(['action' => 'HomeController@doLogin']) }}

				{{ Form::email('email', null, ['class' => 'form-control form-group', 'placeholder' => 'Email', 'autofocus']) }}

				{{ Form::password('password', ['class' => 'form-control form-group', 'placeholder' => 'Password']) }}

				{{ Form::submit('Log in!', ['class' => 'button'])}}

				{{ Form::close() }}
			</div>
		</div>
  	</div>
</section>

@stop

@section('bottomscript')

	<script type="text/javascript">

		$('.parallax-window').parallax({imageSrc: '../img/rocks.jpg'});
	
	</script>

@stop