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
	return Redirect::to('home');
});

Route::get('home', function()
{
	return View::make('homes');
});

Route::get('login', function()
{
	return View::make('login');
});

Route::get('register', function()
{
	return View::make('register');
});

Route::get('vendor', function()
{
	return View::make('vendor');
});

Route::get('vendor-home', function()
{
	return View::make('vendor-home');
});

Route::get('vendor-admin', function()
{
	return View::make('vendor-admin');
});

Route::get('myMenu', function()
{
	return View::make('my-menu');
});

Route::get('user/admin', function()
{
	return View::make('user-admin');
});

Route::get('read', function()
{
	return View::make('read');
});

Route::post('submitRegister', 'DBController@insertData');
Route::post('submitLogin', 'DBController@cekLogin');
Route::get('logout', 'DBController@logout');
Route::post('vendorLogin', 'VendorController@standLogin');
Route::post('saveMenu','VendorController@saveMenu');
Route::post('uploadMenuImage','VendorController@uploadMenuImage');

