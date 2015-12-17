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

Route::get('home', 'HomeController@showHome');

Route::get('user-login', function()
{
	return View::make('user-login');
});

Route::get('register', function()
{
	return View::make('register');
});

Route::get('vendor-login', function()
{
	return View::make('vendor-login');
});

Route::get('kasir-login', function()
{
	return View::make('kasir-login');
});

Route::get('kasir-admin', function()
{
	return View::make('kasir-admin');
});

Route::get('vendor/{username}', 'VendorController@showVendor');

Route::get('vendor-admin', function()
{
	return View::make('vendor-admin');
});

Route::get('vendor-admin/myMenu', function()
{
	return View::make('my-menu');
});

Route::get('vendor-admin/deleteMenu/{idMenu}', 'VendorController@deleteMenu');

Route::get('user/admin', function()
{
	return View::make('user-admin');
});

Route::get('user/admin/user-home', function()
{
	return View::make('user-home');
});

Route::get('user/admin/detail', function()
{
	return View::make('detail');
});

Route::get('user/admin/stand', function()
{
	return View::make('stand');
});

Route::get('read', function()
{
	return View::make('read');
});

Route::get('deliver/order/{idTransaksi}', 'TransaksiController@deliverOrder');
Route::get('order/delivered/{menuname}/{idTransaksi}', 'TransaksiController@orderDelivered');
Route::get('order/{idStand}/{idMenu}', 'TransaksiController@Order');
Route::post('order', 'TransaksiController@doOrder');



Route::post('submitRegister', 'DBController@insertData');
Route::post('submitLogin', 'DBController@cekLogin');
Route::get('logout', 'DBController@logout');
Route::post('vendorLogin', 'VendorController@vendorLogin');
Route::post('kasirLogin', 'VendorController@kasirLogin');
Route::post('saveMenu','VendorController@saveMenu');
Route::post('uploadMenuImage','VendorController@uploadMenuImage');

Route::get('addSaldo/{fullname}','VendorController@addSaldo');
Route::post('addSaldo','VendorController@doAddSaldo');