<div class="container-fluid">
	<nav class="navbar navbar-default navbar-fixed-top">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="vendor-admin">HOME</a>
		</div>
	
		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse navbar-ex1-collapse">
			<ul class="nav navbar-nav navbar-right">

				<?php if (Session::has('user')): ?>
						<li><a href="{{ url() }}/user/admin/detail"><?php echo Session::get('user'); ?></a></li>
						<li><a href="">Saldo</a></li>
						<li><a href="{{ url() }}/logout">Logout</a></li>
					<?php else : ?>
						<li><a href="{{ url() }}/login">Login</a></li>
						<li><a href="{{ url() }}/register">Register</a></li>
						
				<?php endif ?>
				
			</ul>
		</div><!-- /.navbar-collapse -->
	</nav>
</div>