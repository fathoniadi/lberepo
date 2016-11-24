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
			<li><a href=""><svg class="glyph stroked pencil"><use xlink:href="#stroked-pencil"></use></svg> Isi Kuesioner</a></li>
			<li><a href=""><svg class="glyph stroked app-window"><use xlink:href="#stroked-app-window"></use></svg> Event</a></li>
		</ul>

	</div>
@endsection
@section('content')

	<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Daftar Peserta</div>
						<div class="panel-body">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <!-- <th data-field="state" data-checkbox="true" >Item ID</th>
							        <th data-field="id" data-sortable="true">Item ID</th>
							        <th data-field="name"  data-sortable="true">Item Name</th>
							        <th data-field="price" data-sortable="true">Item Price</th> -->
							        <th data-field="no" data-sortable="true">No</th>
							        <th data-field="nrp" data-sortable="true">NRP</th>
							        <th data-field="nama"  data-sortable="true">Nama</th>
							        <th data-field="bidangminat" data-sortable="true">Bidang Minat</th>
							        <th data-field="phone" data-sortable="true">No. Telepon</th>
							        <th data-field="lineID" data-sortable="true">ID Line</th>
							        <th style="right:0" data-field="action" data-sortable="true">Action </th>
							    </tr>
							    </thead>
							    <tbody>
							    	<tr>
							    		<td>1</td>
							    		<td>5115100119</td>
							    		<td>Cahya Putra Hikmawan</td>
							    		<td>IoT</td>
							    		<td>085850059599</td>
							    		<td>cp.hikmawan</td>
							    		<td><center><button type="button" class="btn btn-info btn-sm">
	          								<span class="glyphicon glyphicon-edit"></span> Edit
	        								</button> 
	        								<button style="margin-right:0em; right:0;" type="button" class="btn btn-danger btn-sm">
	          								<span class="glyphicon glyphicon-remove"></span> Remove 
	        								</button></center>
	        							</td>
							    	</tr>
							    	<!-- <tr>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td><button type="button" class="btn btn-info btn-sm">
	          								<span class="glyphicon glyphicon-edit"></span> Edit
	        								</button> 
	        								<button type="button" class="btn btn-danger btn-sm">
	          								<span class="glyphicon glyphicon-remove"></span> Remove 
	        								</button>
	        							</td>
							    	</tr> -->
							    </tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->

			<div class="row">
				<div class="col-lg-12">
					<div class="panel panel-default">
						<div class="panel-heading">Daftar Admin</div>
						<div class="panel-body">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							     <thead>
							    <tr>
							        <!-- <th data-field="state" data-checkbox="true" >Item ID</th>
							        <th data-field="id" data-sortable="true">Item ID</th>
							        <th data-field="name"  data-sortable="true">Item Name</th>
							        <th data-field="price" data-sortable="true">Item Price</th> -->
							        <th data-field="no" data-sortable="true">No</th>
							        <th data-field="nrp" data-sortable="true">NRP</th>
							        <th data-field="nama"  data-sortable="true">Nama</th>
							        <th data-field="bidangminat" data-sortable="true">Lab</th>
							        <th data-field="phone" data-sortable="true">No. Telepon</th>
							        <th data-field="lineID" data-sortable="true">ID Line</th>
							        <th data-field="action" data-sortable="true">Action</th>
							    </tr>
							    </thead>
							    <tbody>
							    	<tr>
							    		<td>1</td>
							    		<td>5115100999</td>
							    		<td>Nakula</td>
							    		<td>AJK</td>
							    		<td>085850059590</td>
							    		<td>theclay</td>
							    		<td><center><button type="button" class="btn btn-info btn-sm">
	          								<span class="glyphicon glyphicon-edit"></span> Edit
	        								</button> 
	        								<button style="margin-right:0em; right:0;" type="button" class="btn btn-danger btn-sm">
	          								<span class="glyphicon glyphicon-remove"></span> Remove 
	        								</button></center>
	        							</td>
							    	</tr>
							    	<!-- <tr>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td>1</td>
							    		<td><button type="button" class="btn btn-info btn-sm">
	          								<span class="glyphicon glyphicon-edit"></span> Edit
	        								</button> 
	        								<button type="button" class="btn btn-danger btn-sm">
	          								<span class="glyphicon glyphicon-remove"></span> Remove 
	        								</button>
	        							</td>
							    	</tr> -->
							    </tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->
		</div>

@endsection