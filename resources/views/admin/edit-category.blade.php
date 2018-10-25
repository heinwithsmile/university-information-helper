@extends('layout.master')

@section('title','Category')
<div class="container-fluid mt-5">
    <div class="row">
        <div class="col-md-2"></div>
        <div class="col-md-8  ">
            <!-- form start  -->
            <form method="post" action="" >
                <h1>Edit category</h1>
                <div class="form-group">
                    <label for="category" class="">Category:</label>
                    <input type="text" name="category"  id="category" class="form-control" placeholder="" autocomplete="off">
                    <button type="submit" name="submit" value="" class="btn btn-primary btn-lg mt-3" >Update</button>
                </div>

            </form>

            <!-- form end -->

        </div>
        <div class="col-md-2"></div>
    </div>
</div>


