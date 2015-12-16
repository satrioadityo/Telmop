@extends('layout')

@section('title')
Telmop's Order
@stop

@section('styles')

@stop

@section('contents')
<div class="container main-site">

	<!-- show list of Vendor -->
	
		<div id="kotakSignup">
			<div id="atas">
				Order
			</div>
			<!-- form register -->
			<div id="bawah">
				<form method="post" action="{{url()}}/order">
					<input class="masuk" type="text" value="{{$bindedMenu->name}}" name="menu"><br/>
					<input class="masuk" type="number" placeholder="Jumlah Beli" name="amountOrder"><br/>

					<input type="hidden" name="username" class="form-control" value="{{$user->username}}">
					<input type="hidden" name="address" class="form-control" value="{{$user->address}}">
					<input type="hidden" name="date" class="form-control" value="{{date('Y-m-d')}}">
					<input type="hidden" name="idStand" class="form-control" value="{{$idStand}}">
					<input type="hidden" name="status" class="form-control" value="{{'prepare'}}">

					<input id="tombol" type="submit" name="btn-signup" value="Submit Order"><br/><br/>
				</form>
			</div>
			
		</div>	
	
</div>
@stop

@section('scripts')

@stop