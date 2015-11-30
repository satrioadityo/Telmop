<?php
// namespace App\Http\controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;
// use Input;
// use DB;
// use Redirect;

class DBController extends BaseController {

	public function insertData()
	{
		$data = array(
			'fullname' => $_POST['name'],
			'address'  => $_POST['address'],
			'username' => $_POST['username'],
			'password' => $_POST['password'],
			'saldo' => 0,
			);
		DB::table('member')->insert($data);
		return Redirect::to('/login');
	}

	public function cekLogin(){
		$result = DB::select('select fullname from member where username=:uName and password=:passwd',['uName' => $_POST['username'], 'passwd' =>$_POST['password']]);
		if ($result) {
			// session dengan nama sesuai user
			Session::put('user', $_POST['username']);
			return Redirect::to('/read')->with('message','Login Sukses');
		}else {
			return Redirect::to('/read')->with('message','User Not Found');
		}
	}
	public function logout(){
		Session::forget('user');
		Session::flush();
		return Redirect::to('/home');
	}
	// public function searchUser(){
	// 	$result = DB::select('update member set saldo='$_POST['saldo']' where username=:uName',['uName' => $_POST['uname']]);
	// }
}
