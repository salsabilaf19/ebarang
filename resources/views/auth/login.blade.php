@extends('layouts.empty', ['paceTop' => true, 'bodyExtraClass' => 'bg-white'])

@section('title', 'SI Barang : msBarang')

@section('content')
<!-- begin login -->
<div class="login login-with-news-feed">
	<!-- begin news-feed -->
	<div class="news-feed">
		<div class="news-image" style="background-image: url(/assets/img/login-bg/login-bg-11.jpg)"></div>
		<div class="news-caption">
			<h4 class="caption-title"><b>SI</b>Barang</h4>
			<p>
				Sistem Informasi Barang
			</p>
		</div>
	</div>
	<!-- end news-feed -->
	<!-- begin right-content -->
	<div class="right-content">
		<!-- begin login-header -->
		<div class="login-header">
			<div class="brand">
				<div class="col-sm-6">
				</div>
				<b>SI</b>Barang</h4>
				<small>Sistem Informasi Barang</small>
			</div>
		</div>
		<!-- end login-header -->
		<!-- begin login-content -->
		<div class="login-content">
			<form action="{{route('login')}}" method="POST" class="margin-bottom-0">
				@csrf
				<div class="form-group m-b-15">
					<input id="email" type="email" class="form-control form-control-lg @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" placeholder="Email" autofocus />

					@error('email')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>
				<div class="form-group m-b-15">
					<input id="password" type="password" class="form-control form-control-lg @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password" />

					@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
					@enderror
				</div>

				<div class="checkbox checkbox-css m-b-30">
					<input type="checkbox" id="remember_me_checkbox" value="" />
					<label for="remember_me_checkbox">
						Remember Me
					</label>
				</div>
				<div class="login-buttons">
					<button type="submit" class="btn btn-success btn-block btn-lg">Login</button>
				</div>
				<hr />
				<p class="text-center text-grey-darker">
					&copy; <?= date('Y') ?> Salsabila Fithriyah </p>
			</form>
		</div>
		<!-- end login-content -->
	</div>
	<!-- end right-container -->
</div>
<!-- end login -->
@endsection