<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>@yield('title')</title>

		<!-- Bootstrap CSS -->
		<link href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css" rel="stylesheet">

		<!-- added style -->
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css') }}/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="{{ url('assets/css') }}/telmop.css">
		@yield('styles')

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
		@yield('contents')
		

		@include('footer.footer')

		<!-- jQuery -->
		<script src="//code.jquery.com/jquery.js"></script>
		<!-- Bootstrap JavaScript -->
		<script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

		<script type="text/javascript" src="{{ url('assets/js') }}/jquery.js"></script>
		<script type="text/javascript" src="{{ url('assets/js') }}/bootstrap.min.js"></script>

		<!-- added script -->
		@yield('scripts')
	</body>
</html>