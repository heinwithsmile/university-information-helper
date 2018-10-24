@extends('layout.master')
@section('title', 'About Page')

<style type="text/css">
    html,body{
        height: 100%;
        width: 100%;
    }
    .nav-item{
        margin-right: 20px;
    }
    .nav-item a:hover {
        background-color: #5cb85c;
    }

    #home{

        background: url("/img/chatbot.png") no-repeat center center fixed;
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
    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <img src="{{asset('/img/faq.jpg')}}">
                </div>
                <div class="col-sm-6">
                    <h1>Website chatbots</h1>
                    <p>We’ve come a long way from the days of “live chat” on websites. These days chatbots are intelligent and capable of completing a host of different tasks. Everything from booking meetings with sales reps to pushing prospects further down the funnel with engaging content can be done.</p>
                    <p>Leading the charge in chatbot innovation is Drift, which launched its conversational marketing platform less than two years ago. With Drift, businesses can connect with website visitors on a one-to-one basis, and book meetings prospects in real-time, all with the help of a chatbot.
                    </p>
                </div>
            </div>
        </div>
    </div>

    <div class="padding">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <h1>Website chatbots</h1>
                    <p>We’ve come a long way from the days of “live chat” on websites. These days chatbots are intelligent and capable of completing a host of different tasks. Everything from booking meetings with sales reps to pushing prospects further down the funnel with engaging content can be done.</p>
                    <p>Leading the charge in chatbot innovation is Drift, which launched its conversational marketing platform less than two years ago. With Drift, businesses can connect with website visitors on a one-to-one basis, and book meetings prospects in real-time, all with the help of a chatbot.
                    </p>
                </div>
                <div class="col-sm-6">
                    <img src="{{asset('/img/ask.jpg')}}">
                </div>
            </div>
        </div>
    </div>
@endsection
@section('footer')
    @include('layout.footer')
    @endsection