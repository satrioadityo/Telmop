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
					<img src="{{ url() }}/assets/images/{{ $vendor->standpicture }}" class="img-responsive" alt="{{ $vendor->username }}">

					<a href="{{ url() }}/vendor/{{ $vendor->username }}">
						<div class="overlay-image">
							<div class="vendor">{{ $vendor->vendorname }}</div>
						</div>
					</a>
				</div>
				<hr>
				<div class="vendor-name">{{ $vendor->vendorname }}</div>
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
								<td>{{$menu->name}}</td>
								<td>{{$menu->price}}</td>

								@if($menu->stock > 0)
								<td>Available</td>
								@else
								<td>Not Available</td>
								@endif

								@if(Session::has('user'))
									@if($menu->stock > 0)
										<td><a class="btn btn-primary" href='{{ url() }}/order/{{$menu->idStand}}/{{$menu->idMenu}}'>Order</a></td>
									@else
										<td><a class="btn btn-danger">Out of Stock</a></td>
									@endif
								@else
									@if($menu->stock > 0)
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

	</div>
@stop

@section('scripts')

	<script type="text/javascript">
	$('a#confirmation').click(function(event) {
		/* Act on the event */
		alert('heho');
	});
	</script>
	
@stop