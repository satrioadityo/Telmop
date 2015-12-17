<?php

use Illuminate\Database\Eloquent\Model;

class Menu extends Model {
	protected $table = 'menu';
	protected $primaryKey = 'idMenu';

	public $timestamps = false;
}