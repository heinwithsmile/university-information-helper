@extends('layout.master')

@section('title','Admin Login')

@section('content')

	<!-- Content section start -->
	<div class="container-fluid mt-5">
		<div class="row">


			<div class="col-md-4 col-sm-4 col-xs-12">


			</div>
			<div class="col-md-4 col-sm-4 col-xs-12">
				<!-- form start  -->

				<form class="form-container" method="POST" action="#">
					<h1 class="header-title font-weight-bold text-success">Admin Login!</h1>
					<br><br>
					<div class="form-group">
						<label for="egUser">Admin Name</label>
						<input type="text" name="username" class="form-control" id="egUser" placeholder="username">
					</div>
					<div class="form-group">
						<label for="egPassword">Password</label>
						<input type="password" name="password" class="form-control" id="egPassword" placeholder="password">
					</div>
					<button type="submit" name="submit" value="Login" class="btn btn-success " >Submit</button>
				</form>
				<!-- form end -->
			</div>
			<div class="col-md-4 col-sm-4 col-xs-12"></div>

		</div>

	</div>

	<!-- Content section end -->


@endsection


