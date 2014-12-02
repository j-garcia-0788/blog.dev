
@extends ('layouts.master')

@section ('content')

	<h1>Roll The Dice</h1>

	<p>You rolled {{{ $roll }}}</p>
	<p>You guessed {{{ $guess }}}</p>
	
	@if ($roll == $guess)
		<p>Congrats! You got it.</p>
	@else
		<p>You guessed wrong, try again! :)</p>
	@endif

	@for ($i = 1; $i <= 6; $i++)
		<!-- <a href ="{{{ action('HomeController@rollDice', $i) }}}">Guess {{{ $i }}}</a> -->
		{{ link_to_action('HomeController@rollDice', "Guess $i", [$i], ['class'=>'btn btn-info btn-xs']) }}
	@endfor


@stop