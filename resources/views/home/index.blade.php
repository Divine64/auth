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
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
