<!DOCTYPE html>
<html>
<head>
	
	@include('includes/head')

</head>
<body class="layout-container ls-top-navbar layout-sidebar-l3-md-up">

	<!-- Navbar -->
	<nav class="navbar navbar-light bg-white navbar-full navbar-fixed-top ls-left-sidebar">

		<!-- Navbar toggle -->
		<button class="navbar-toggler hidden-md-up pull-xs-right" type="button" data-toggle="collapse" data-target="#navbar"><span class="material-icons">menu</span></button>

		<!-- Sidebar toggle -->
		<button class="navbar-toggler pull-xs-left" type="button" data-toggle="sidebar" data-target="#sidebar"><span class="material-icons">menu</span></button>

		<!-- Brand -->
		<span class="navbar-brand">Brand</span>

		<!-- Collapse -->
		<div class="collapse navbar-toggleable-xs" id="navbar">
			<ul class="nav navbar-nav">
				<li class="nav-item"><a class="nav-link" href="{{ url('/') }}">Fixed</a></li>
				<li class="nav-item active"><a class="nav-link" href="{{ url('/sidebar') }}">Sidebar</a></li>
			</ul>
		</div>
		<!-- // END Collapse -->
	</nav>
	<!-- // END Navbar -->

	<!-- Sidebar -->
	<div class="sidebar sidebar-left sidebar-visible-md-up sidebar-size-3 sidebar-dark bg-primary" id="sidebar" data-scrollable>

		<!-- Brand -->
		<a href="{{ url('/') }}" class="sidebar-brand sidebar-brand-bg sidebar-brand-border m-b-0">Brand</a>

		<!-- Menu -->
		<ul class="sidebar-menu sm-active-button-bg">
			<li class="sidebar-menu-item">
				<a class="sidebar-menu-button" href="{{ url('/') }}"><i class="sidebar-menu-icon material-icons">home</i> Fixed layout</a>
			</li>
			<li class="sidebar-menu-item active">
				<a class="sidebar-menu-button" href="{{ url('/sidebar') }}"><i class="sidebar-menu-icon material-icons">menu</i> Sidebar layout</a>
			</li>
		</ul>
		<!-- // END Menu -->

	</div>
	<!-- // END Sidebar -->

	<!-- Content -->
	<div class="layout-content" data-scrollable>
		<div class="container-fluid">

			@yield('breadcrumb')

			@yield('content')

		</div>
	</div>
	<!-- // END Content -->

	<!-- App JS (includes vendor assets) -->
	<script src="{{ asset('js/main.js') }}"></script>

</body>
</html>