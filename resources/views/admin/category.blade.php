@extends('layout.master')

@section('title','Add Category')

@section('navigation')
    @include('layout.admin-nav')
@endsection
@section('content')
    <div class="container-fluid mt-5">
        <div class="row">
            <div class="col-md-2"></div>
            <div class="col-md-8  ">
                <!-- form start  -->
                    <form method="POST" action="" >
                        <h1>Add a category</h1>
                        @foreach($errors->all() as $error)
                            <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                        @if(session('status'))
                            <p class="alert alert-success">{{session('status')}}</p>
                        @endif
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="category" class="">Category:</label>
                            <input type="text" name="category"  id="category" class="form-control" placeholder="" autocomplete="off">
                            <button type="submit" name="submit" value="" class="btn btn-primary btn-lg mt-3" >Insert</button>
                        </div>

                    </form>

                <!-- form end -->

            </div>
            <div class="col-md-2"></div>
        </div>
    </div>



@endsection

