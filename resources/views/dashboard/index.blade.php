@extends('dashboard.layout.dashboard')

@section('navbar')
	@include('dashboard.layout.navbar')
@endsection

@section('sidebar')
	@include('dashboard.layout.sidebar')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<div class="row">
			<div class="col-lg-12">
				<center><h1 class="page-header">Selamat Datang di LBE, {{session('user')['nrp']}}</h1></center>
			</div>
			<div class="col-sm-9" style="float: none; margin: 0 auto;">
			<div class="col-sm-6 pull-left" style="text-align: center; padding: 0.5em;">
				<div style="background-color: #64BEF3; padding: 1em; border-top-right-radius: 10px; border-top-left-radius: 10px">
					<h4 style="color: white">Computer Networking</h4>
				</div>
				<div style="background-color: white; padding: 1em; border: 1px solid #64BEF3">
					<a href="catatan"><h4 style="color: black">Mikrotik</h4></a>
				</div>
			</div>
			<div class="col-sm-6 pull-right" style="text-align: center; padding: 0.5em;">
				<div style="background-color: #64BEF3; padding: 1em; border-top-right-radius: 10px; border-top-left-radius: 10px">
					<h4 style="color: white">IoT</h4>
				</div>
				<div style="background-color: white; padding: 1em; border: 1px solid #64BEF3">
					<a href="catatan"><h4 style="color: black">Sensor Gerak</h4></a>
				</div>
			</div>
			</div>
		</div>
		
	</div>
@endsection