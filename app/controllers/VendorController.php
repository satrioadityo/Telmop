<?php

class VendorController extends BaseController {

	// added by satrio
	public function showVendor($username)
	{
		// menampilkan halaman vendor berdasarkan nama
		$vendor = Stand::where('username', $username)->first();
		$listMenu = Menu::where('idStand', $vendor['idStand'])->get();
		$data = array('vendor' => $vendor, 'listMenu' => $listMenu);

		return View::make('vendor-home', $data);
	}

	public function addSaldo($fullname)
	{
		// nambahin saldo user
		$data = array('user' => $fullname);
		return View::make('adminAddSaldo', $data);
	}

	public function doAddSaldo()
	{
		// nambahin saldo user
		$userWillBeAdded = User::where('fullname', Input::get('fullname'))->first();

		$userWillBeAdded->saldo = Input::get('saldo')+$userWillBeAdded->saldo;
		$userWillBeAdded->save();

		return Redirect::to('kasir-admin');
	}

	public function vendorLogin(){
		$result = DB::select('select * from stand where username=:uName and password=:passwd',['uName' => $_POST['username'], 'passwd' =>$_POST['password']]);
		if ($result) {
			Session::put('user', $_POST['username']);
			Session::put('status', 'stand');
			return Redirect::to('/vendor-admin');
		}else {
			return Redirect::to('/read')->with('message','User Not Found');
		}
	}

	public function kasirLogin(){
		$result = DB::select('select * from stand where username=:uName and password=:passwd',['uName' => $_POST['username'], 'passwd' =>$_POST['password']]);
		if ($result) {
			Session::put('user', $_POST['username']);
			Session::put('status', 'kasir');
			return Redirect::to('/kasir-admin');
		}else {
			return Redirect::to('/read')->with('message','User Not Found');
		}
	}


	public function saveMenu(){
		$data = array(
		'idMenu' => $_POST['id_product'],
		'price' => $_POST['price'],
		'name' => $_POST['product_name'],
		'stock' => $_POST['stock'],
		'idStand' => $_POST['idtoko'],
		);
		DB::table('menu')->insert($data);
		return Redirect::back();
	}

	public function deleteMenu($idMenu){
		$menu = Menu::where('idMenu', $idMenu)->first();
		$menu->delete();
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
