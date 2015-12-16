<?php
// namespace App\Http\controllers;

// use Illuminate\Http\Request;
// use App\Http\Requests;
// use Input;
// use DB;
// use Redirect;

class VendorController extends BaseController {

	
	public function standLogin(){
		$result = DB::select('select * from stand where idStand=:uName and pass=:passwd',['uName' => $_POST['username'], 'passwd' =>$_POST['password']]);
		if ($result) {
			Session::put('user', $_POST['username']);
			Session::put('status', 'stand');
			return Redirect::to('/vendor-admin');
		}else {
			return Redirect::to('/read')->with('message','User Not Found');
		}
	}
	public function saveMenu(){
		$data = array(
		'idMenu' => $_POST['id_product'],
		'harga' => $_POST['price'],
		'nama' => $_POST['product_name'],
		'stok' => $_POST['stock'],
		'idStand' => $_POST['idtoko'],
		);
		DB::table('menu')->insert($data);
		return Redirect::back();
	}
	public function uploadMenuImage(){
		$file = Input::file('file');
		$idBarang = $_POST['idBarang'];
        $destinationPath = public_path() . '/images/';
        $filename = $file->getClientOriginalName();
        $upload_success = Input::file('file')->move($destinationPath, $filename);

		$data = array(
		'id' => '',
		'imageName' => $filename,
		'idMenu' => $idBarang,
		'path' => $destinationPath,
		);
		DB::table('imagemenu')->insert($data);
		return Redirect::back();
	}
}
