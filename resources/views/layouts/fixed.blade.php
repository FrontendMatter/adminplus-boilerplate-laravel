<!DOCTYPE html>
<html>
<head>
	
	@include('includes/head')
	
</head>
<body class="layout-container ls-top-navbar">

	<!-- Navbar -->
	<nav class="navbar navbar-dark bg-primary navbar-full navbar-fixed-top">
		<div class="container">

			<!-- Navbar toggle -->
			<button class="navbar-toggler hidden-md-up pull-xs-right last-child-xs" type="button" data-toggle="collapse" data-target="#navbar"><span class="material-icons">menu</span></button>

			<!-- Brand -->
			<a class="navbar-brand" href="{{ url('/') }}">Brand</a>

			<!-- Collapse -->
			<div class="collapse navbar-toggleable-xs" id="navbar">
				<ul class="nav navbar-nav">
					<li class="nav-item active"><a class="nav-link" href="{{ url('/') }}">Fixed</a></li>
					<li class="nav-item"><a class="nav-link" href="{{ url('/sidebar') }}">Sidebar</a></li>
				</ul>
			</div>
			<!-- // END Collapse -->
		</div>
	</nav>
	<!-- // END Navbar -->

	<!-- Content -->
	<div class="layout-content" data-scrollable>
		<div class="container">

			@yield('breadcrumb')

			@yield('content')

		</div>
	</div>
	<!-- // END Content -->

	<!-- App JS (includes vendor assets) -->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>