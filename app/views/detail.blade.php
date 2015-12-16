@extends('layout-backend-user')
@section('title')
	Market Menu
@stop

@section('styles')

@stop

@section('contents')
<?php
	$abd = "aksjdna";
	$query = DB::table('member')->where('username', Session::get('user'))->get();
	
?>

	<div class="container main-site" style="margin-top:30px">

		<!-- show list of Vendor -->
		<div class="row">
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-4">
				<div class="col-lg-12">
                	<div class="form-group">
                        <div class="input-group" style="width: 100%; height: 100px; align-content: center">
                            <img src="" class="img-responsive" alt="Bober Cafe">
                        </div>
	                </div>
	                <div class="form-group">
						<label style="color:#ffffff">Username *</label><br>
                        <input id="user2" class="form-control" type="text" name="Username" value="<?php echo Session::get('user'); ?>" style="block; color:#333" readonly="true"/>
					</div>
					<div class="form-group">
						<label style="color:#ffffff">Pass *</label><br>
                        <input class="form-control" type="text" name="Username" value="Akihisa" style="block; color:#333" readonly="false"/>
					</div>
					<div class="form-group">
						<label style="color:#ffffff">Fullname *</label><br>
                        <input class="form-control" type="text" name="Username" value="<?php echo $query ?>" style="block; color:#333" />
					</div>
					<div class="form-group">
						<label style="color:#ffffff">Address *</label><br>
                        <input class="form-control" type="text" name="Username" value="" style="block; color:#333" />
					</div>
	            </div>
	            <div class="col-lg-6" style="text-align:left">
					<input id="buttonedit" type="button" class="btn btn-primary" value="Edit" onclick="" style="visibility:show" />
				</div>
				<div class="col-lg-6" style="text-align:right">
					<input id="buttonsave" type="button" class="btn btn-warning" value="Save" onclick="" style="visibility:show" />
					<input id="buttoncancel" type="button" class="btn btn-default" value="Cancel" onclick="" style="visibility:show"/>
				</div>
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-8">
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
	</div>

@stop

@section('scripts')
	
@stop