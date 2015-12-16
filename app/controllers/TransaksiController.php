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
}
