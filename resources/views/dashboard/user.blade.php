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
					<div class="panel panel-default">
						<div class="panel-heading">Daftar Peserta</div>
						<div class="panel-body">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
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
							    		<td>Hikmawan</td>
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
							    </tbody>
							</table>
						</div>
					</div>
				</div>
			</div><!--/.row-->
	</div>
@endsection