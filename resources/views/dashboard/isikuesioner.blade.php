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
									<button type="submit" class="btn btn-primary">Submit</button>
								</div>
							</div>	
						</form>
					</div>
				</div>
			</div><!-- /.col-->
		</div><!-- /.row -->
		
	</div>
@endsection