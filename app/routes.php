<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showelcome');

Route::get('say-hello{name}', 'HomeController@sayHello');
Route::get('roll-dice/{guess}', 'HomeController@rollDice');

Route::get('resume', 'HomeController@showResume');
Route::get('portfolio', 'HomeController@showPortfolio');

Route::resource('posts', 'PostsController');

Route::get('login', 'HomeController@showLogin');
Route::post('login', 'HomeController@doLogin');
Route::get('logout', 'HomeController@doLogout');



Route::get('/', function()
{
    return View::make('hello');
})->before('auth.basic');

// Route::get('orm-test', function ()
// {
//     //find all posts
//     	$posts = Post::all();

//     	$posts = Post::find(1);
//     	$posts = Post::findOrFail(1);

//     	$posts = Post::with('user')->paginate(2);
//     	$posts = Post::with('user')->get();

//		$posts = Post::with('user')->where('title', '=', '..')->get();

//	   	$query = Post::with('user');
//		$query->where('title', 'like', '%persistent%');
//		$query->orWhere('body', 'like', '%othervalues%');
//		$query->whereHas('user', function($q)
		// {
		// 	$q->where('email', 'like', '%ben%');
		// }		

//		$posts = $query->get();
// 		$posts = $query->paginate(5);
//});

Route::get('/', function()
{
	return View::make('hello');
});

Route::get('say-hello', function() 
{
	return "Hello Codeup!";
});

Route::get('say-hello/{name}', function($name)
{
	if ($name == 'John') {
		return Redirect::to('/');
	} else {
		return "Hello, $name!";
	}
});
