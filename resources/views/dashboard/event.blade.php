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
				<div class="panel-heading">Event LBE Lab AJK</div>
				<div class="panel-body">
					<div class="col-md-12">
							<table data-toggle="table" data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
							    <thead>
							    <tr>
							        <th data-field="no" data-sortable="true">No</th>
							        <th data-field="namaevent" data-sortable="true">Event</th>
							        <th data-field="tanggal"  data-sortable="true">Tanggal</th>
							        <th data-field="bidangminat" data-sortable="true">Bidang Minat</th>
							    </tr>
							    </thead>
							    <tbody>
							    	<tr>
							    		<td>1</td>
							    		<td>Mikrotik</td>
							    		<td>12 Desember 2016</td>
							    		<td>Computer Networking</td>
							    	</tr>
							    </tbody>
							</table>
					</div>	
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</div>
@endsection