@extends('layout-backend')
@section('title')
	Market Menu
@stop

@section('styles')

@stop

@section('contents')

<div class="row">
	<div class="col-lg-12" style="margin-right:30px; margin-left:30px;">
		<div class="col-lg-6">
			<h1>My Menu</h1>
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
						<?php
							$result = DB::table('menu')->where('idStand', Session::get('user'))->get();
							if (!$result) { // add this check.
							    die('Invalid query: ' . mysql_error());
							} else {
								while ($row == mysql_fetch_array($result)) {
									echo "<tr><td>" . $row['nama'] . "</td><td>" . $row['harga'] . "</td></tr>";
								}
							}
						?>
					</tbody>
				</table>
			</div>
		</div>

		<div class="col-lg-6">
			<center>
				<h1>Add Menu</h1>
				<div class="col-lg-12">
					<div class="drzone" id="drzone">
						<form action="{{url('/uploadMenuImage')}}" class="dropzone" id="dropzone" method="POST" style="color:#2ECC71;">
							<input type="hidden" name="idBarang" id="idBarang">
						</form>
					</div>
					<form class="form" method="POST" action="{{url('/saveMenu')}}">
						<input type="hidden" name="_token" value="{{csrf_token()}}">
						<div class="form-group">
							<input type="text" onchange="showVal(this.value)" name="id_product" id="id_product" placeholder="Product ID" class="form-controller form-control" >
						</div>
						<div class="form-group">
							<input type="text" name="product_name" id="product_name" placeholder="Name of Product" class="form-controller form-control">
						</div>
						<div class="form-group">
							<input type="text" name="price" id="price" placeholder="Price" class="form-controller form-control">
						</div>
						<div class="form-group">
							<input type="text" name="stock" id="stock" placeholder="Stock" class="form-controller form-control">
						</div>
						<div class="form-group">
							<input type="hidden" name="idtoko" value="<?php echo Session::get('user');?>">
						</div>
						<button class="btn btn-primary" id="submit2">Add Product</button>
					</form>
				</div>
			</center>
		</div>
	</div>
</div>


@stop

@section('scripts')
<script type="text/javascript">
	$('#product_name').prop('disabled',true);
	$('#price').prop('disabled',true);
	$('#stock').prop('disabled',true);
	$('#submit2').prop('disabled',true);
	var myDropzone = new Dropzone("#dropzone");
	myDropzone.disable();

	

	function showVal(newVal){
  		$('#idBarang').val(newVal);
  		// alert($('#idBarang').val());
  		$('#product_name').prop('disabled',false);
		$('#price').prop('disabled',false);
		$('#stock').prop('disabled',false);
		$('#submit2').prop('disabled',false);
		myDropzone.enable();
  		
	}
	
</script>

@stop