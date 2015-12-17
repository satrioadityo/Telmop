@extends('layout-backend')

@section('title')
	Kasir Login
@stop

@section('styles')

@stop


@section('contents')
<div class="container main-site">

	<!-- show list of Vendor -->
	<div id="kotak">
		<div id="atas">
			LOGIN Kasir
		</div>
		<!-- form untuk login -->
		<div id="bawah">
			<form method="post" action="{{url()}}/kasirLogin">
				<input class="masuk" type="text" autocomplete="on" placeholder="Your Username .." name="username"><br/>
				<input class="masuk" type="password" autocomplete="on" placeholder="Password .." name="password"><br/>
				<input id="tombol" type="submit" value="Login"><br/><br/>
			</form>
		</div>
	</div>
</div>
@stop

@section('scripts')

@stop