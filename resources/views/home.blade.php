@extends('layout.master')
@section('title', 'Home Page')
<style type="text/css">
    html,body{
        height: 100%;
        width: 100%;
        margin:0;
        padding:0;
    }
    .nav-item{
        margin-right: 20px;
    }
    .nav-item a:hover {
        background-color: #5cb85c;
    }

    .home{

        background: url("/img/chatbot00.png") no-repeat center center fixed;
        background-size: cover;
        position: relative;
        display: table;
        height: 100%;
        width: 100%;


    }
    .landing-text
    {
        display: table-cell;
        text-align: center;
        vertical-align: middle;
        font-weight: bolder ;
        font-size: 1.2em;
    }
    .landing-text h1
    {
        font-size: 300%;
        font-weight: 500;
    }
    .padding
    {
        padding: 70px 0;
    }
    .fixed {
        background: url("/img/mainpic.jpg") no-repeat center center fixed;
        height: 60%;
        position: relative;
        width: 100%;
        background-size: cover;
    }
    .padding img
    {
        width:100%;
    }
</style>
@section('navigation')
    @include('layout.nav')
@endsection

@section('content')
    @include('layout.content')
   @endsection

