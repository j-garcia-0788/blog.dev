@extends ('layouts.master')

@section('content')

<section class="heading parallax parallax-window">
 	<div class="container">
    	<h2>Login:</h2>
		<div class="newpost">
			<div class="col-md-6 col-md-offset-3">
				{{ Form::open(['action' => 'HomeController@doLogin', 'id' => 'login-form']) }}

				{{ Form::email('email', null, ['class' => 'form-control form-group', 'placeholder' => 'Email', 'autofocus']) }}

				{{ Form::password('password', ['class' => 'form-control form-group', 'placeholder' => 'Password']) }}

				{{ Form::close() }}
				<div class="postbuttons">
					<div class="blogbutton">
						<a class='button' id="login" href="#">Login!</a>
					</div>
				</div>
			</div>
		</div>
  	</div>
</section>

@stop

@section('bottomscript')

	<script type="text/javascript">
		$('#login').click(
			function() {
				$('#login-form').submit();
			}
		);

		$('.parallax-window').parallax({imageSrc: '../img/rocks.jpg'});
	
	</script>

@stop