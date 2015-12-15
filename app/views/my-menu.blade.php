@extends('layout-backend')
@section('title')
	Market Menu
@stop

@section('styles')

@stop

@section('contents')
<div class="row">
	<div class="col-md-8">
		<h1>My Menu</h1>
	</div>

	<div class="col-md-4">
		<h1>Add Menu</h1>
	</div>
	
</div>

<div class="row">
	<div class="col-md-8">

	</div>
	
	<div class="col-md-4">

		


		<div class="drzone" id="drzone">
			<form action="{{url('/uploadMenuImage')}}" class="dropzone" id="dropzone" method="POST" style="color:#2ECC71;">
				<input type="hidden" name="idBarang" id="idBarang">
				<!-- <center>
					<h4 style="color:#2ECC71;">Click Here to Upload</h4>
				</center> -->
				
				<!-- <button id="uploadall" class="btn btn-default">Upload All</button>  -->
			</form>

		</div>
		<form class="form" method="POST" action="{{url('/saveMenu')}}">
			<input type="hidden" name="_token" value="{{csrf_token()}}">
			<div class="form-group">
				<input type="text" onchange="showVal(this.value)" name="id_product" id="id_product" placeholder="Product ID" class="form-controller" >
				<input type="text" name="product_name" id="product_name" placeholder="Name of Product" class="form-controller">
				<input type="text" name="price" id="price" placeholder="Price" class="form-controller">
				<input type="text" name="stock" id="stock" placeholder="Stock" class="form-controller">
				<input type="hidden" name="idtoko" value="<?php echo Session::get('user');?>">
			</div>
			<button class="btn btn-primary" id="submit2">Add Product</button>
		</form>
		
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