@extends('layout')

@section('title')
	Telmop's Home
@stop

@section('styles')
	
@stop

@section('contents')
	<div class="container main-site">
		<!-- show list of Vendor -->
		<div class="row" style="margin-top:25px">
			<div class="col-lg-12">
			
				<!-- GET STAND DATA WITH THE IMAGE STAND -->
				@foreach($listStand as $stand)
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
						<div class="container-image">
							<img src="{{ url() }}/assets/images/{{$stand->standpicture}}" class="img-responsive" alt="{{$stand->username}}">
							<a href="{{ url() }}/vendor/{{$stand->username}}">
								<div class="overlay-image">
									<div class="vendor">
										{{$stand->vendorname}}
									</div>
								</div>
							</a>
						</div>
					</div>
				@endforeach

			</div>
		</div>
	</div>
@stop

@section('scripts')
	
@stop