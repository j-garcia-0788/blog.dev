@extends ('layouts.master')

@section('content')

<div id="background" class="container">
	<h2 align="center">Login:</h2>
			<div class="col-md-5" align="center">
				{{ Form::open(['action' => 'HomeController@doLogin']) }}

				{{ Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Email', 'autofocus']) }}

				{{ Form::password('password', ['class' => 'form-control', 'placeholder' => 'Password']) }}

				{{ Form::submit('Log in!', ['class' => 'btn btn-info'])}}

				{{ Form::close() }}
			</div>
</div>

@stop