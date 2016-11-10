@extends('homepage.layout.homepage')
@section('title')
	Register
@endsection
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
			<div class="logo">
				<center><img style="width:40%; padding-bottom:1em" src="{{url('/assets/img')}}/newajkbluesky.jpg"></center>
			</div>
			<center><div class="panel-heading" style="padding-top:0.1em"><h3><b>REGISTER</b></h3></div></center>
			@if ($errors->has())
			<div class="notif" class="login-panel panel panel-default" style="background-color: red; color:white; padding: 1em">
				<span class="pull-right close-notif" >x</span>
				@foreach ($errors->all() as $error)
                        <p style="color:white">{{ $error }}</p>
                @endforeach
			</div>
			@endif
			<div class="login-panel panel panel-default">
				<div class="panel-body">
					<form role="form" method="POST" action="{{ url('/register') }}">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="Nama" name="name" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="NRP" name="nrp" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Retype Password" name="retype-password" type="password" value="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="No. Telepon" name="phone" type="text" autofocus="">
							</div>
							<!-- <label style="padding-left: 0.9em;"><h5>Pilih LBE :</h5></label> -->
							<div class="form-group">
								<select required id="labLbe" name="lab" class="form-control" >
									<option value="">Pilih LBE</option>
									@foreach($labs as $lab)
										<option value="{{$lab->id}}">{{$lab->name}}</option>
									@endforeach
								</select>
							</div>
								<!-- <label style="padding-left: 0.9em;"><h5>Pilih Bidang :</h5></label> -->
							<div class="form-group">
								<div class="pilihlbe">
									<select id="bidangminat" name="category_id" style="display: none" class="form-control">
										
									</select>
								</div>
							</div>
							
							
							<div class="form-group">
								<input class="form-control" placeholder="ID Line" name="lineID" type="text" autofocus="">
							</div>
							<button class="btn btn-primary" type="submit" style="width:100%">Register</button>
						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
		<div class="col-sm-4 col-sm-offset-4">
			<!-- <p><h5></h5><a href="register.html">Register</a></p> -->
			<center><p style="margin-top:0.5em">Punya akun? <a href="{{url('/')}}/login">Login</a></p>
		
		</div>
	</div><!-- /.row -->	

</div>
@endsection