@extends('layout-backend')

@section('title')
Telmop's Home
@stop

@section('styles')

@stop

@section('contents')
<div class="container main-site">

	<!-- show list of Vendor -->
	
		<div id="kotakSignup">
			<div id="atas">
				Add Saldo
			</div>
			<!-- form register -->
			<div id="bawah">
				<form method="post" action="{{url()}}/addSaldo">
					<input class="masuk" type="text" placeholder="{{$user}}" name="fullname" value="{{$user}}"><br/>
					<input class="masuk" type="number" placeholder="" name="saldo"><br/>
					<input id="tombol" type="submit" name="btn-add-saldo" value="Add Saldo"><br/><br/>
				</form>
			</div>
			
		</div>	
	
</div>
@stop

@section('scripts')

@stop