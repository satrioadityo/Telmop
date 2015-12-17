@extends('layout-backend')

@section('title')
	Telmop's Kasir Admin
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- <input type="search" name="search" id="inputSearch" class="form-control" value="" placeholder="Search User"> -->
			</div>
		</div>

		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<!-- table user -->
				<?php 
					$users = User::get();
				?>
				<div class="table-responsive">
					<table class="table">
						<thead>
							<tr>
								<th>Full Name</th>
								<th>Address</th>
								<th>Saldo</th>
								<th>Action</th>
							</tr>
						</thead>
						<tbody>
						@foreach($users as $user)
							<tr>
								<td>{{$user->fullname}}</td>
								<td>{{$user->address}}</td>
								<td>{{$user->saldo}}</td>
								<td>
									<a class="btn btn-primary" href="{{url()}}/addSaldo/{{$user->fullname}}">Add Saldo</a>
								</td>
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