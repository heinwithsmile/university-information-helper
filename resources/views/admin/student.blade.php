@extends('layout.master')
@section('title', 'Student Info')

@section('navigation')
    @include('layout.admin-nav')
@endsection
@section('content')
    <div class="container-fluid table-responsive">

        <table class="container table table-bordered table-responsive-md border-dark mt-5 ">
            <thead class="thead text-white" style="background-color: #5cb85c">
            <tr>
                <th scope="col">စဥ္</th>
                <th scope="col">အမည္</th>
                <th scope="col">ခုံအမွတ္</th>
                <th scope="col">စကား၀ွတ္</th>
                <th scope="col">အီးေမးလိပ္စာ</th>
                <th scope="col">ေမဂ်ာ</th>
            </tr>
            </thead>
                @foreach($users as $user)
            <tbody class="border border-dark">
            <tr class="table-row">
                <td>{{$user->id}}</td>
                <td>{{$user->name}}</td>
                <td>{{$user->roll}}</td>
                <td>{{$user->password}}</td>
                <td>{{$user->email}}</td>
                <td>{{$user->major}}</td>
            </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    @endsection