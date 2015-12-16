@extends('layout')

@section('title')
Telmop's User Login
@stop

@section('styles')

@stop

@section('contents')
<div class="container main-site">

	<!-- show list of Vendor -->
	<div id="kotak">
		<div id="atas">
			LOGIN USER
		</div>
		<!-- form untuk login -->
		<div id="bawah">
			<form method="post" action="{{url()}}/submitLogin">
				<input class="masuk" type="text" autocomplete="on" placeholder="Username .." name="username"><br/>
				<input class="masuk" type="password" autocomplete="on" placeholder="Password .." name="password"><br/>
				<input id="tombol" type="submit" value="Login"><br/><br/>
			</form>
		</div>
	</div>
</div>
@stop

@section('scripts')

@stop