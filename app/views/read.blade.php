@extends('layout')

@section('title')
Telmop's Home
@stop

@section('styles')

@stop

@section('contents')
<div class="container main-site">

	@if(Session::has('message'))
		<center>
			<span style ="font-size:30px;" class="label label_success">{{Session::get('message')}}</span>
		</center>
	@endif
</div>
@stop

@section('scripts')

@stop