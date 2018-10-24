@extends('layout.master')

@section('title','Login Form')

@section('content')

    <!-- Content section start -->
    <div class="container-fluid mt-5">
        <div class="row">


            <div class="col-md-4 col-sm-4 col-xs-12">


            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- form start  -->
                <h1 class="header-title font-weight-bold text-success mb-3">Login Form!</h1>

                <form class="form-container" method="POST">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{!! $error !!}</p>
                    @endforeach
                        {{csrf_field()}}
                    <div class="form-group">
                        <label for="">Email Address</label>
                        <input type="text" name="email" class="form-control" id="email" placeholder="email">
                    </div>
                    <div class="form-group">
                        <label for="Password">Password</label>
                        <input type="password" name="password" class="form-control" id="Password" placeholder="password">
                    </div>
                    <button style="" type="submit" name="submit" class="btn btn-success " >Submit</button>
                </form>
                <!-- form end -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12"></div>

        </div>

    </div>

    <!-- Content section end -->


@endsection