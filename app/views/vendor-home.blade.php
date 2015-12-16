@extends('layout')

@section('title')
	Telmop's Vendor
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">

		<!-- show Vendor -->
		<div class="row row-site">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="container-image">
					<img src="{{ url() }}/assets/images/{{ $vendor->standpicture }}" class="img-responsive" alt="{{ $vendor->nama }}">

					<a href="{{ url() }}/vendor/{{ $vendor->nama }}">
						<div class="overlay-image">
							<div class="vendor">{{ $vendor->nama }}</div>
						</div>
					</a>
				</div>
				<hr>
				<div class="vendor-name">{{ $vendor->nama }}</div>
			</div>

			<div class="col-xs-12 col-sm-8 col-md-8 col-lg-8">
				<div class="table-responsive">
					<table class="table	">
						<thead>
							<tr>
								<th>Menu</th>
								<th>Price</th>
								<th>Status</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($listMenu as $menu)
							<tr>
								<td>{{$menu->nama}}</td>
								<td>{{$menu->harga}}</td>

								@if($menu->stok > 0)
								<td>Available</td>
								@else
								<td>Not Available</td>
								@endif

								@if(Session::has('user'))
									@if($menu->stok > 0)
										<td><a class="btn btn-primary" data-toggle="modal" href='#confirmation'>Order</a></td>
									@else
										<td><a class="btn btn-danger">Out of Stock</a></td>
									@endif
								@else
									@if($menu->stok > 0)
										<td><a class="btn btn-info" href="{{ url() }}/user-login">Login for Order</a></td>
									@else
										<td><a class="btn btn-danger">Out of Stock</a></td>
									@endif
									
								@endif
								
							</tr>
						@endforeach
						</tbody>
					</table>
				</div>
			</div>
		</div>

		<!-- modal confirmation -->
		<div class="modal fade" id="confirmation">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Order Detail</h4>
					</div>
					<div class="modal-body">
						<form action="#" method="POST">
							<div class="form-group">
								<label for="Menu">Menu</label>
								<input type="text" class="form-control" id="" placeholder="Hot Moccachino" disabled="true">
							</div>

							<div class="form-group">
								<label for="OrderNumber">Order Number</label>
								<input type="text" class="form-control" id="" placeholder="Number of Order">
							</div>

							<div class="form-group">
								<label for="Location">Location</label>
								<input type="text" class="form-control" id="" placeholder="Your Location">
							</div>

							<button type="submit" class="btn btn-primary">Order</button>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					</div>
				</div>
			</div>
		</div>

	</div>
@stop

@section('scripts')
	
@stop