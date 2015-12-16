@extends('layout-backend')

@section('title')
	Telmop's Vendor Admin
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">

		<?php 
			$standLoggedIn = Stand::where('username', Session::get('user'))->first();
		 ?>

		<!-- show list of Vendor -->
		<div class="row" style="margin-top:5px">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="container-image">
					<img src="{{ url() }}/assets/images/{{ $standLoggedIn->standpicture }}" class="img-responsive" alt="{{$standLoggedIn->vendorname}}">

					<a href="{{ url() }}/vendor-admin">
						<div class="overlay-image">
							<div class="vendor">{{$standLoggedIn->vendorname}}</div>
						</div>
					</a>
				</div>
				<hr>
				<div class="vendor-name">{{$standLoggedIn->vendorname}}</div>
			</div>

			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="table-responsive">
					<table class="table	">
						<thead>
							<tr>
								<th>Menu</th>
								<th>Jumlah Pesan</th>
								<th>Lokasi</th>
								<th>Nama Pemesan</th>
								<th>Action</th>
							</tr>
						</thead>
						<?php 
							$menuOrdered = Transaksi::where('idStand', $standLoggedIn->idStand)->
														where('statustransaksi', 'prepare')->get();
						 ?>
						<tbody>
						@if($menuOrdered->count() == 0)
							<div class="panel panel-primary">
								  <div class="panel-heading">
										<h3 class="panel-title">Info</h3>
								  </div>
								  <div class="panel-body">
										<h2 style="color:#000">There is NO ORDER</h2>
								  </div>
							</div>
						@endif
						@foreach($menuOrdered as $menu)
							<tr>
								<td>{{$menu->menuname}}</td>
								<td>{{$menu->jumlahBeli}}</td>
								<td>{{$menu->location}}</td>
								<td>{{$menu->username}}</td>
								<td><a class="btn btn-primary" href="{{ url() }}/deliver/order/{{$menu->id}}">Deliver</a></td>
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