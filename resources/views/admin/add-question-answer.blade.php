@extends('layout.master')

@section('title','Add Question and Answer')

@section('navigation')
    @include('layout.admin-nav')
@endsection
@section('content')
<div class="container-fluid mt-5">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8  ">
			<!-- form start  -->

				<h5 class="text-center" >Adding Questions & Answers!</h5>
		<form class="form-container mt-5" action="" method="POST" enctype="multipart/form-data" >
			@foreach($errors->all() as $error)
				<p class="alert alert-danger">{{$error}}</p>
				@endforeach
			@if(session('status'))
				<p class="alert alert-success">{{session('status')}}</p>
				@endif
				{{csrf_field()}}
			<div class="form-group row">
				<label for="question" class="col-md-4 col-sm-2 col-xs-6 text-right">Question:</label>
				<input type="text" name="question"  id="question" class="form-control col-md-8 col-sm-10 col-xs-6" autocomplete="off">
			</div>
				<div class="form-group row">
					<label for="category_id" class="col-md-4 col-sm-2 col-xs-6 text-right my-1">Category:</label>
					<select class="custom-select my-1 col-md-8 col-sm-10 col-xs-6 " name="category_id" id="category_id">
						@foreach($categories as $category)
							<option value="{{$category->id}}">{{$category->categoryName}}</option>
						@endforeach

					</select>
				</div>
			<div class="form-group row">
				<label for="keyone" class="col-md-4 col-sm-2 col-xs-6 text-right">Keyword 1:</label>
				<input type="text" name="keyone"  id="keyone" class="form-control col-md-8 col-sm-10 col-xs-6" autocomplete="off">
			</div>
			<div class="form-group row">
				<label for="keytwo" class="col-md-4 col-sm-2 col-xs-6 text-right">Keyword 2:</label>
				<input type="text" name="keytwo"  id="keytwo" class="form-control col-md-8 col-sm-10 col-xs-6" autocomplete="off">
			</div>
			<div class="form-group row">
				<label for="answer" class="col-md-4 col-sm-2 col-xs-6 text-right">Answer:</label>
				<textarea name="answer"  id="answer" class="form-control col-md-8 col-sm-10 col-xs-6" rows="5"></textarea>
			</div>
			<div class="form-group row">
				<label for="file" class="col-md-4 col-sm-2 col-xs-6 text-right">Answer File:</label>
				<input type="file" id="file" name="file" class="form-control-file col-md-8 col-sm-10 col-xs-6">

			</div>

			<button type="submit" name="submit" value="Login" class="btn btn-lg btn-success float-right" >Add Query</button>
		</form>
		<!-- form end -->

		</div>
		<div class="col-md-2"></div>			
	</div>
</div>



@endsection

