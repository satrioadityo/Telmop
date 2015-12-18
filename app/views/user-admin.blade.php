@extends('layout')

@section('title')
	Telmop's User Admin
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">

		<!-- show list of Vendor -->
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="container-image">
					<img src="{{ url() }}/assets/images/prof-pic.png" class="img-responsive" alt="Bober Cafe">

					<a href="{{ url() }}/vendor">
						<div class="overlay-image">
							<div class="vendor">{{Session::get('user')}}</div>
						</div>
					</a>
				</div>
				<hr>
				<div class="vendor-name">{{Session::get('user')}}</div>
			</div>

			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="table-responsive">
					<table class="table	">
						<thead>
							<tr>
								<th>Menu</th>
								<th>Jumlah Pesan</th>
								<th>Lokasi</th>
								<th>Status Order</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php 
							$userLoggedIn = User::where('username', Session::get('user'))->first();
							$menuOrdered = Transaksi::where('username', $userLoggedIn->username)->
														where('statustransaksi','!=', 'terkirim')->orderBy('statustransaksi', 'asc')->get();
						 ?>
						<tbody>
						@if($menuOrdered->count() == 0)
							<div class="panel panel-primary">
								  <div class="panel-heading">
										<h3 class="panel-title">Info</h3>
								  </div>
								  <div class="panel-body">
										<h2 style="color:#000">You Have NO ORDER</h2>
								  </div>
							</div>
						@endif
						@foreach($menuOrdered as $menu)
							<tr>
								<td>{{$menu->menuname}}</td>
								<td>{{$menu->jumlahBeli}}</td>
								<td>{{$menu->location}}</td>
								<td>{{$menu->statustransaksi}}</td>
								@if($menu->statustransaksi == 'dikirim')
								<td><a class="btn btn-success" href="{{url()}}/order/delivered/{{$menu->idTransaksi}}">Delivered</a></td>
								@else
								<td><a class="btn btn-warning" href="#">Wait Please</a></td>
								@endif
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	
@stop