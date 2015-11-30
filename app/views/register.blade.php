@extends('layout')

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
				REGISTER
			</div>
			<!-- form register -->
			<div id="bawah">
				<form method="post" action="{{url()}}/submitRegister">
					<input class="masuk" type="text" autocomplete="on" placeholder="Full Name.." name="name"><br/>
					<input class="masuk" type="text" autocomplete="on" placeholder="Address.." name="address"><br/>
					<input class="masuk" type="text" autocomplete="on" placeholder="Username.." name="username"><br/>
					<input class="masuk" type="password" autocomplete="on" placeholder="Password.." name="password"><br/>
					<input id="tombol" type="submit" name="btn-signup" value="Sign Me Up"><br/><br/>
				</form>
			</div>
			
		</div>	
	
</div>
@stop

@section('scripts')

@stop