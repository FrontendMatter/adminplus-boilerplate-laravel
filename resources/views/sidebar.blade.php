@extends('layouts/fluid')
@section('breadcrumb')
	<!-- Breadcrumb -->
	<ol class="breadcrumb">
	    <li><a href="{{ url('/') }}">AdminPlus</a></li>
	    <li class="active">Sidebar layout</li>
	</ol>
	<!-- // END Breadcrumb -->
@endsection
@section('content')
    @include('includes/content')
@endsection