@extends('layouts.main')

@section("styles")
	<link rel="stylesheet" href="/css/login.css">
@stop

@section("scripts")
	<script href="/js/app.js"></script>
@stop

@section('content')
	
	<section class="container col-md-8">	
		
		<form method="post" class="frm">

			<h2>SIGN IN</h2>

			@if(session('alert'))

			<section class="alert alert-danger">

				{{session('alert')}}

			</section>

			@endif

			@if (count($errors) > 0)
			<div>
				<ul class="alert alert-danger">
					@foreach ($errors->all() as $error)
					<li>{{ $error }}</li>
					@endforeach
				</ul>
			</div>
			@endif

			@csrf

			<section class="form-group">

				<label>Username:</label>

				<input type="text" name="username" class="form-control">

			</section>

			<section class="form-group">

				<label>Password:</label>

				<input type="password" name="password" class="form-control">

			</section>

			<section class="form-group">

				<input type="checkbox" checked="checked" name="remember"> Remember me

			</section>

			<section class="form-group">

				<input style="width: 100%;" type="submit" class="btn btn-outline-dark" value="Login">

			</section>

			<a href="register">Sign up new account</a>

		</form>

	</section>


@endsection