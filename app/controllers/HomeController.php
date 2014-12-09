<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showWelcome()
	{
		return View::make('hello');
	}

	public function sayHello($name)
	{
		$age = 28;
		$data = [
			'name' => $name,
			'age' => $date
		];

		return View::make('say-hello', $data);
	}

	public function rollDice($guess)
	{
		$roll = mt_rand(1, 6); 
		$guess = [
			'roll' => $roll,
			'guess' => $guess
		];
	    return View::make('roll-dice', $guess);
	}
	public function showResume()
	{
		return View::make('resume');
	}

	public function showPortfolio()
	{
		return View::make('portfolio');
	}

	public function showWhack()
	{
		return View::make('whackamole.whack');
	}

	public function showLogin()
	{
		return View::make('login');
	}

	public function doLogin()
	{
		$email    = Input::get('email');
		$password = Input::get('password');

		if (Auth::attempt(array('email' => $email, 'password' => $password))) {
    		return Redirect::intended('posts');
		} else {
			Session::flash('errorMessage', 'Failed to Authenticate.');

			return Redirect::back();
		}
	}

	public function doLogout()
	{
		Auth::logout();

		return Redirect::action('HomeController@index');
	}
}
