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
							<img src="{{ url() }}/assets/images/{{$stand->standpicture}}" class="img-responsive" alt="{{$stand->nama}}">
							<a href="{{ url() }}/vendor/{{$stand->nama}}">
								<div class="overlay-image">
									<div class="vendor">
										{{$stand->nama}}
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