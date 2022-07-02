@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        @auth

        <div class="text-center">
        <h2>Welcome {{ auth()->user()->username }}</h2>
    </div>


        </div>
        <h1>Dashboard</h1>
        <p class="lead">Only Google Adsence authenticated users can access this section.</p>
        <a class="btn btn-lg btn-primary" href="https://www.google.com/adsense/signup" role="button">View your earnings here &raquo;</a>
        <h1>Balance:</h1>
        <p class="lead">$2000</p>
        <h1>Update:</h1>
        <p>Withdrawal Form Would be available here on the stated date.</p>
        <h1>Time:</h1>
        <p class="lead">10:49pm - 12:30am, GMT, West Africa.</p>
        <p>Wednesday 6th July, 2022.</p>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
