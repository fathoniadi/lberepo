@extends('dashboard.layout.dashboard')

@section('navbar')
	@include('dashboard.layout.navbar')
@endsection

@section('sidebar')
	@include('dashboard.layout.sidebar')
@endsection

@section('content')
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
		<!-- <div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			</ol>
		</div> -->
		<div class="row">
			<div class="col-lg-12">
				<center><h1 class="page-header">Selamat Datang di LBE, {{session('user')['nrp']}}</h1></center>
			</div>
			<div class="col-sm-8">
				<h4>Event hari ini blablablabla</h4>
				<form class="form-control" style="border-style: none" id="eventForm">
					<div class="form-group">
						<textarea id="eventNote" name="eventNote"></textarea>
					</div>
					<div class="form-group">
							<button type="submit" class="btn btn-primary" style="float:right">Submit</button>
					</div>
					
				</form>				
			</div>
		</div>
		
	</div>
@endsection