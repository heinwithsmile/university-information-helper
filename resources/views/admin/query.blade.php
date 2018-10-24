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
                <th scope="col">id</th>
                <th scope="col">Question</th>
                <th scope="col">Keyword 1</th>
                <th scope="col">Keyword 2</th>
                <th scope="col">Answer</th>
                <th scope="col">Answer File</th>
                <th scope="col">Operation</th>
            </tr>
            </thead>
            @foreach($queries as $query)
            <tbody class="border border-dark">
            <tr class="table-row">
                <td>{{$query->id}}</td>
                <td>{{$query->questions}}</td>
                <td>{{$query->keyword1}}</td>
                <td>{{$query->keyword2}}</td>
                <td>{{$query->answers}}</td>
                <td>{{$query->answer_file}}</td>
                <td class="text-center">
                    <button type="button" value="edit" class=""><a href="#"> ျပင္မည္</a> </button>
                    <button type="button" value="edit" class=""> <a href="#" class="">ဖ်က္မည္</a> </button>
                </td>
            </tr>
            </tbody>
            @endforeach
        </table>
    </div>

    @endsection