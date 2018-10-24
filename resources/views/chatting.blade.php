@extends ("layout.master")
@section('title','Chatting')
<style type="text/css">
	.chat{
		background: url("/img/b8.jpg") no-repeat center center fixed;
		background-size: cover;
		position: relative;
		height: 100%;
		width: 100%;
	}
</style>
@section('navigation')
    @include('layout.nav')
@endsection
@section ('content')
<div class="contaier-fluid">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
		<form class="form-container mt-5" method="POST" action="">

			<div class="form-group">
				<h3>Question!</h3>
				<p class="text-dark">You can ask what you want.</p>
				<input type="text" name="question"  id="question" class="form-control  text-muted" placeholder="your question type here " autocomplete="off" required>
			</div>

		</form>

			<div class="alert alert-success mt-5" role="alert">
				<h2 class="">Answer!</h2>
				<div class="alert alert-success " role="alert">
					<h4 class="alert-heading">Well done!</h4>
					<p>Aww yeah, you successfully read this important alert message. This example text is going to run a bit longer so that you can see how spacing within an alert works with this kind of content.</p>
					<hr>
					<p class="mb-0">Whenever you need to, be sure to use margin utilities to keep things nice and tidy.</p>
                </div>
		
		     </div>
	    </div>
    </div>
</div>
@endsection
@section('footer')
	@include('layout.footer')
	@endsection