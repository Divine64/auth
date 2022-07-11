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
        <p><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScWS3rlVzqiyUuC9lYTLdAY1IA_ZIosUyHUCdKnCZH4j0wIeQ/viewform?embedded=true" width="640" height="1198" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></p>
        <h1>Time:</h1>
        <p class="lead">10:00pm - 10:30pm, GMT, West Africa.</p>
        <p>Monday 11th July, 2022.</p>
        @endauth

        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
@endsection
