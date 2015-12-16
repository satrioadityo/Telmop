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
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="container-image">
						<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">
						<a href="{{ url() }}/vendor-login">
							<div class="overlay-image">
								<div class="vendor">
									Bober Cafe
								</div>
							</div>
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	
@stop