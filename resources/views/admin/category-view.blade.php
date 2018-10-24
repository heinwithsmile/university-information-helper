@extends('layout.master')

@section('title','Add Question and Answer')

@section('navigation')
    @include('layout.admin-nav')
@endsection
@section('content')

    <div class="container-fluid table-responsive mt-5">

        <table class="table table-bordered table-responsive-md border-dark ">
            <thead class="thead text-white" style="background-color: #5cb85c">
            <tr>
                <th scope="col">Id</th>
                <th scope="col">Name</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            @foreach($categories as $category)
                <tbody class="border border-dark">
                <tr class="table-row">
                    <td>{{$category->id}}</td>
                    <td>{{$category->categoryName}}</td>
                    <td class="text-center">
                        <button type="button" value="edit" class=""><a href="{{action('CategoryController@edit',$category->id)}}"> ျပင္မည္</a> </button>
                        <button type="button" value="edit" class=""><a href="#" class=""> ဖ်က္မည္ </a></button>
                    </td>
                </tr>
                </tbody>
            @endforeach
        </table>
    </div>

@endsection