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

Route::get('/', function()
{
	// return View::make('hello');
	return Redirect::to('home');
});

Route::get('home', function()
{
	return View::make('homes');
});

Route::get('login', function()
{
	return "This will be login page";
});

Route::get('register', function()
{
	return "This will be register page";
});

Route::get('vendor', function()
{
	return View::make('vendor');
});