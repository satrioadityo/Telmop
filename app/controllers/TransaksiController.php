<?php

class TransaksiController extends BaseController {

	public function deliverOrder($idTransaksi)
	{
		// update status prepare jadi dikirim
		$transaksi = Transaksi::find($idTransaksi);
		$transaksi->statustransaksi = "dikirim";
		$transaksi->save();

		return Redirect::to('vendor-admin');
	}

	public function Order($idStand, $idMenu)
	{
		$bindedMenu = Menu::find($idMenu);
		$username = Session::get('user');
		$userLoggedIn = User::where('username', $username)->first();
		
		$data = array('bindedMenu' => $bindedMenu, 'user' => $userLoggedIn, 'idStand' => $idStand);

		return View::make('order', $data);
	}

	public function doOrder()
	{
		$order = new Transaksi();
		$order->username = Input::get('username');
		$order->tglTransaksi = Input::get('date');
		$order->location = Input::get('address');
		$order->menuname = Input::get('menu');
		$order->jumlahBeli = Input::get('amountOrder');
		$order->idStand = Input::get('idStand');
		$order->statustransaksi = Input::get('status');

		$order->save();
		return "order success";
	}

	public function orderDelivered($idTransaksi)
	{
		$orderDelivered = Transaksi::where('idTransaksi', $idTransaksi)->first();
		$orderDelivered->statustransaksi = 'terkirim';
		$orderDelivered->save();

		return Redirect::back();
	}
}
