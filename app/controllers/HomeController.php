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

	public function showHome()
	{
		// menampilkan home, GET DATA SELURUH STAND
		$listStand = Stand::get();

		$data = array('listStand' => $listStand);

		return View::make('home', $data);
	}

	public function showWelcome()
	{
		return View::make('hello');
	}

}
