

<html>
<head>
	<title>Roll Dice</title>
</head>
<body>

	<h1>Roll The Dice</h1>

	<p>You rolled {{{ $roll }}}</p>
	<p>You guessed {{{ $guess }}} </p>
	
	{{{ if ($roll == $guess): }}}
		<p>Congrats! You got it.</p>
	{{{ endif; }}}

</body>
</html>