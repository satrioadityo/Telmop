<?php

use Illuminate\Database\Eloquent\Model;

class Transaksi extends Model {
	protected $table = 'transaksi';
	protected $primaryKey = 'idTransaksi';
	public $timestamps = false;
}