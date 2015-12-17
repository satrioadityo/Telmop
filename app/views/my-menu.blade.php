@extends('layout-backend')
@section('title')
	Market Menu
@stop

@section('styles')

@stop

@section('contents')
<?php 
	$standLoggedIn = Stand::where('username', Session::get('user'))->first();
?>

	<div class="container main-site" style="margin-top:75px">
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
							<?php 
								$results = Menu::where('idStand',$standLoggedIn->idStand)->get();
						        //echo $results;
					        ?>
							<tbody>
							@foreach($results as $result)
								<tr>
									<td>{{$result->name}}</td>
									<td>{{$result->price}}</td>
									@if($result->stock >0)
									<td>available</td>
									@else
									<td>not available</td>
									@endif
									<td><a class="btn btn-warning" href="{{ url() }}/vendor-admin/myMenu/{{$result->idMenu}}">Edit</a>
									<!-- <a class="btn btn-danger" href="{{url()}}/vendor-admin/deleteMenu/{{$result->idMenu}}">Delete</a></td> -->
									<a class="btn btn-danger" href="" data-toggle="modal" data-target="#myModal{{$result->idMenu}}">Delete</a></td>
									
									<div id="myModal{{$result->idMenu}}" class="modal fade" tabindex="-1" role="dialog">
										<div class="modal-dialog">
										    <div class="modal-content">
										      	<div class="modal-header">
										        	<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
											       	<h4 class="modal-title">{{$result->name}}</h4>
										    	</div>
											    <div class="modal-body">
											       	<!-- <p>One fine body&hellip;Are you sure?</p> -->
											       	<h2 style="color:#333; text-align:center">Are you sure?</h2>
											    </div>
											    <div class="modal-footer">
												    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
												    <a class="btn btn-danger" href="{{url()}}/vendor-admin/deleteMenu/{{$result->idMenu}}">Delete</a>
												</div>
											</div><!-- /.modal-content -->
										</div><!-- /.modal-dialog -->
									</div><!-- /.modal -->
								</tr>
							@endforeach
							</tbody>
						</table>
					</div>
					<h1>
						
					</h1>
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
								
									<input type="text" name="product_name" id="product_name" placeholder="Name of Product" class="form-controller form-control">
								
									<input type="text" name="price" id="price" placeholder="Price" class="form-controller form-control">
								
									<input type="text" name="stock" id="stock" placeholder="Stock" class="form-controller form-control">

									<?php 
										$idStand = Stand::where('username', Session::get('user'))->first();
									?>
									<input type="hidden" name="idtoko" value="<?php echo $idStand->idStand;?>">
								</div>
								<button class="btn btn-primary" id="submit2">Add Product</button>
							</form>
						</div>
					</center>
				</div>
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

	function deleteMenu(idMenu){
		DB::table('menu')->where('idMenu',idMenu)->delete();
		return Redirect::back();
		//echo $result;
	}
	
</script>

@stop