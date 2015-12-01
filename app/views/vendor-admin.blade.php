@extends('layout-backend')

@section('title')
	Telmop's Vendor Admin
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">

		<!-- show list of Vendor -->
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<div class="container-image">
					<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">

					<a href="{{ url() }}/vendor">
						<div class="overlay-image">
							<div class="vendor">Bober Cafe</div>
						</div>
					</a>
				</div>
				<hr>
				<div class="vendor-name">Bober Cafe</div>
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
						<tbody>
							<tr>
								<td>Hot Capuchino</td>
								<td>2</td>
								<td>Wisma Sukapura 44</td>
								<td>Rismana</td>
								<td><a class="btn btn-primary">Deliver</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	
@stop