@extends ('layouts.master')

@section('content')

<section class="module parallax parallax-2">
 	<div class="container">
    	<h2>Login:</h2>
		<div class="row text-center">
			<div class="col-md-6 col-md-offset-3">
				{{ Form::open(['action' => 'HomeController@doLogin']) }}

				{{ Form::email('email', null, ['class' => 'form-control form-group', 'placeholder' => 'Email', 'autofocus']) }}

				{{ Form::password('password', ['class' => 'form-control form-group', 'placeholder' => 'Password']) }}

				{{ Form::submit('Log in!', ['class' => 'btn btn-info'])}}

				{{ Form::close() }}
			</div>
		</div>
  	</div>
</section>

@stop