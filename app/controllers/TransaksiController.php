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
		return Redirect::to('user/admin');
	}

	public function orderDelivered($menuname, $idTransaksi)
	{
		$orderDelivered = Transaksi::where('idTransaksi', $idTransaksi)->first();
		$orderDelivered->statustransaksi = 'terkirim';
		
		$menuDelivered = Menu::where('name', $menuname)->first();
		$menuDelivered->stock = $menuDelivered->stock - $orderDelivered->jumlahBeli;

		$userDelivered = User::where('username', Session::get('user'))->first();
		$userDelivered->saldo = $userDelivered->saldo - ($orderDelivered->jumlahBeli * $menuDelivered->price);

		$standDelivered = Stand::where('idStand', $orderDelivered->idStand)->first();
		$standDelivered->saldo = $standDelivered->saldo + ($orderDelivered->jumlahBeli * $menuDelivered->price);

		$orderDelivered->save();
		$menuDelivered->save();
		$userDelivered->save();
		$standDelivered->save();

		return Redirect::to('user/admin');
	}
}
