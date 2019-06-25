@extends('layouts.main')

@section("styles")
	<link rel="stylesheet" href="/css/register.css">
@stop

@section("scripts")
	<script href="/js/app.js"></script>
@stop

@section('content')
	
	<section class="container col-md-8">	
		
		<form method="post" class="register">

			<h2>SIGN UP</h2>

			<section class="form-group">

				<label>Email:</label>

				<input type="text" name="email" class="form-control">

			</section>

			<section class="form-group">

				<label>Username:</label>

				<input type="text" name="username" class="form-control">

			</section>

			<section class="form-group">

				<label>Password:</label>

				<input type="password" name="password" class="form-control">

			</section>

			<section class="form-group">

				<label>Confirm Password:</label>

				<input type="password" name="remember" class="form-control">

			</section>


			<section class="form-group">

				<label>Gender: </label>

				<input type="radio" name="gender" class="form-item" checked="checked">Male
				<input type="radio" name="gender" class="form-item">Female

			</section>

			<section class="form-group">

				<label>Avatar:</label>

				<input type="images" name="avatar" class="form-control">

			</section>


			<section class="form-group">

				<input type="checkbox" checked="checked" name="chkagree"> I agree to <a href="">Term of Service</a>

			</section>

			<section class="form-group">

				<input style="width: 49%" type="submit" class="btn btn-success" value="Confirm">

				<input style="width: 49%" type="reset" class="btn btn-warning" value="Reset">

			</section>

		</form>

	</section>


@endsection