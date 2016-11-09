@extends('homepage.layout.homepage')
@section('content')
<div class="container">
	<div class="row">
		<div class="col-md-4 col-md-offset-4 col-sm-4 col-sm-offset-4">
			<div class="logo">
				<center><img style="width:40%; padding-bottom:1em" src="{{url('/assets/img')}}/newajkbluesky.jpg"></center>
			</div>
			<center><div class="panel-heading" style="padding-top:0.1em"><h3><b>LOGIN</b></h3></div></center>
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
					<form role="form" method="POST" action="">
						<fieldset>
							<div class="form-group">
								<input class="form-control" placeholder="NRP" name="nrp" type="text" autofocus="">
							</div>
							<div class="form-group">
								<input class="form-control" placeholder="Password" name="password" type="password" value="">
							</div>
							<center><button  class="btn btn-primary" style=" width:100%;">Login</button></center>
						<!-- <a href="register.html" class="btn btn-primary">Register</a>
-->						</fieldset>
					</form>
				</div>
			</div>
		</div><!-- /.col-->
		<div class="col-sm-4 col-sm-offset-4">
			<!-- <p><h5></h5><a href="register.html">Register</a></p> -->
			<center><p style="margin-top:0.5em">Belum punya akun? <a href="{{url('/')}}/register">Register</a></p>
		
		</div>
	</div><!-- /.row -->	

</div>
@endsection