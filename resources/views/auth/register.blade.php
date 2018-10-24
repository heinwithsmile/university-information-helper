@extends('layout.master')
@section('title','Registration')
<style type="text/css">
</style>
@section('content')
    <!-- Content section start -->
    <div class="container-fluid mt-5">
        <div class="row mt-5 pt-3 justify-content-center">

            <div class=" col-md-4 col-sm-4 col-xs-12">
                <!-- form start  -->

                <h1 class="header-title font-weight-bold text-success">Registration!</h1>
                <form class="form-container mt-5" method="POST" action="">
                    @foreach($errors->all() as $error)
                        <p class="alert alert-danger">{{$error}}</p>
                        @endforeach
                    <input type="hidden" name="_token" value="{{csrf_token()}}">

                    <div class="form-group">
                        <label for="name">အမည္</label>
                        <input type="text" name="name"  id="name" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="roll">ခုံအမွတ္</label>
                        <input type="text" name="roll" id="roll" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="password">စကား၀ွတ္</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>
                   <!---------------- <div class="form-group">
                        <label for="password"> စကား၀ွတ္ အတည္ျပဳပါ</label>
                        <input type="password" name="password" class="form-control" id="password" placeholder="">
                    </div>--------------------->
                    <div class="form-group">
                        <label for="email">အီးေမးလိပ္စာ</label>
                        <input type="text" name="email"  id="email" class="form-control" placeholder="">
                    </div>
                    <div class="form-group">
                        <label class="my-1" for="major">ေမဂ်ာေရႊးခ်ယ္ရန္</label>
                        <select class="custom-select my-1 " name="major" id="major">
                            <option selected>Choose</option>
                            <option >Archi</option>
                            <option >Civil</option>
                            <option >Mechanical</option>
                            <option >EP</option>
                            <option >EC</option>
                            <option >IT</option>
                            <option >MC</option>
                            <option >Petro</option>
                            <option >Chemical</option>
                        </select>
                    </div>
                        <div class="form-group">
                            <label class="my-1" for="major">တက္ေရာက္ေသာနွစ္</label>
                            <select class="custom-select my-1 " name="year" id="major">
                                <option selected>Choose</option>
                                <option >First Year</option>
                                <option value="">Second Year</option>
                                <option >Third Year</option>
                                <option >Fourth Year</option>
                                <option >Fifth Year</option>
                                <option >Final Year</option>
                            </select>
                        </div>
                    <button type="submit" name="submit" value="Login" class="btn btn-success " >စာရင္းသြင္းမည္</button>
                </form>
                <!-- form end -->
                <div class="col-md-4 col-sm-4 col-xs-12"></div>
            </div>
        </div>
    </div>

    <!-- Content section end -->
@endsection