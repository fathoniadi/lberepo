@extends('dashboard.layout.dashboard')
@section('navbar')
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
		<div class="container-fluid">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#sidebar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="#"><span>LBE</span>AJK</a>
				<ul class="user-menu">
					<li class="dropdown pull-right">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg>{{session('user')['nrp']}} <span class="caret"></span></a>
						<ul class="dropdown-menu" role="menu">
							<!-- <li><a href="#"><svg class="glyph stroked male-user"><use xlink:href="#stroked-male-user"></use></svg> Profile</a></li>
							<li><a href="#"><svg class="glyph stroked gear"><use xlink:href="#stroked-gear"></use></svg> Settings</a></li> -->
							<li><a href="{{url('logout')}}"><svg class="glyph stroked cancel"><use xlink:href="#stroked-cancel"></use></svg> Logout</a></li>
						</ul>
					</li>
				</ul>
			</div>
							
		</div>
	</nav>
@endsection
@section('sidebar')
<div id="sidebar-collapse" class="col-sm-3 col-lg-2 sidebar">
		<form role="search">
		<!-- 	<div class="form-group">
				<input type="text" class="form-control" placeholder="Search">
			</div> -->
		</form>
		<ul class="nav menu">
			<li class="active"><a href="{{url('/dashboard')}}"><svg class="glyph stroked dashboard-dial"><use xlink:href="#stroked-dashboard-dial"></use></svg> Dashboard</a></li>
			<li><a href="{{url('/isikuesioner')}}"><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Isi Kuesioner</a></li>
			<li><a href="{{url('/user')}}"><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Daftar Peserta</a></li>
		</ul>

	</div>
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
				<div class="panel panel-default">
					<div class="panel-heading">Formulir Feedback</div>
					<div class="panel-body">
						<div class="col-md-12">
							<form role="form">
								<div class="form-group">
									<label>Tanggal</label>
									<input class="form-control" type="date">
								</div>
								<div class="form-group">
									<label>Materi</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Deskripsi</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<label>Feedback (Pesan/Saran)</label>
									<textarea class="form-control" rows="3"></textarea>
								</div>
								<div class="form-group">
									<button type="submit" class="btn btn-primary">Submit Button</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div>
@endsection