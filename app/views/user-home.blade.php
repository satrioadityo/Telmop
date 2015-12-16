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
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
				<div class="container-image">
					<img src="" class="img-responsive" alt="Bober Cafe">

					<a href="{{ url() }}/vendor">
						<div class="overlay-image">
							<div class="vendor">Bober Cafe</div>
						</div>
					</a>
				</div>
			</div>
		</div>
	</div>
@stop

@section('scripts')
	
@stop