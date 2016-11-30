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
				<div class="panel-heading">Catatan LBE, Mikrotik, 12-12-2016</div>
				<div class="panel-body">
					<div class="col-md-12">
						<form class="form-control" style="border-style: none" id="eventForm" action="saveCatatan" method="post">
							<div class="form-group">
								<textarea id="eventNote" name="eventNote"></textarea>
							</div>
							<div class="form-group">
								<button type="submit" class="btn btn-primary" style="float:right">Save</button>
							</div>
						</form>		
					</div>	
				</div>
			</div>
		</div><!-- /.col-->
	</div><!-- /.row -->
</div>
@endsection