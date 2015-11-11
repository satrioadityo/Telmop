<!-- THIS IS JUST A SAMPLE HTML PAGE, USE HOMES.BLADE.PHP INSTEAD CZ IT USE BLADE TEMPLATING -->


<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Telmop Home</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- added style -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css') }}/telmop.css">

		<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	</head>
	<body>
		<!-- header -->
		@include('header.header-frontend')

		<!-- content -->
		<div class="container main-site">

			<!-- show list of Vendor -->
			<div class="row">
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="container-image">
						<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">

						<a href="#vendorpage">
							<div class="overlay-image">
								<div class="vendor">Bober Cafe</div>
							</div>
						</a>
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="container-image">
						<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">

						<div class="overlay-image">
							<div class="vendor">Bober Cafe</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="container-image">
						<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">

						<div class="overlay-image">
							<div class="vendor">Bober Cafe</div>
						</div>
					</div>
				</div>

				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-3">
					<div class="container-image">
						<img src="{{ url() }}/assets/images/bober.jpg" class="img-responsive" alt="Bober Cafe">

						<div class="overlay-image">
							<div class="vendor">Bober Cafe</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<!-- footer -->
		<div class="footer">
			<div class="footer-content">Telmop - © 2015</div>
		</div>

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
	</body>
</html>