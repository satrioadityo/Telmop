@extends('layout-backend-user')
@section('title')
	Market Menu
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
				<center><h1>Daftar Menu</h1></center>
				<div class="">
					
				</div>
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
							<tr>
								<td>Hot Capuchino</td>
								<td>13</td>
								<td>Available</td>
								<?php if (Session::has('user')): ?>
									<td><a class="btn btn-primary" data-toggle="modal" href='#confirmation'>Order</a></td>
								<?php endif ?>
							</tr>
							<tr>
								<td>Hot Moccachino</td>
								<td>14</td>
								<td>Not Available</td>
								<td></td>
							</tr>
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