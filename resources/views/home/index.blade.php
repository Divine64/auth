@extends('layouts.app-master')

@section('content')
    <div class="bg-light p-5 rounded">

        @auth

        <div class="text-center">
        <h2>Welcome {{ auth()->user()->username }}</h2>
    </div>


        </div>
        <div class="body" style="background-color: cadetblue">
        <h1>Dashboard</h1>
        <p class="lead" style="background-color: cornflowerblue">Incomes-trade.com User.</p>
        <a class="btn btn-lg btn-primary" href="#" role="button">INVEST &raquo;</a>

        <div>
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-blue">
                <i class="fas fa-chart-bar fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                <h4 class="uk-margin-top">
                    <a href="#">Bitcoin<i class="fas fa-chevron-right uk-float-right"></i></a>
                </h4>
                <hr>
                <p class="text-center" style="color: #888;">Deposit Amount</p>
                <P class="text-center" style="color: rgb(86, 127, 240); font-weight: 500; font-size: large;">$3000-$30,000</P>
                <p class="text-center" style="color: steelblue; font-weight: 500; font-size: large;">  <input type="text" value="3Hzz7Ab9biNPAc3K4JYEc9L9ZxJvJiFhmH"
                    id="myInput">
                    <button onclick="myFunction()">Invest</button>

                    <script>
                        function myFunction() {
                            var copyText =
                            document.getElementById("myInput");
                            copyText.select();
                            copyText.setSelectionRange(0, 99999)
                            document.execCommand("copy");
                            alert("Adress Copied: " +
                            copyText.value);
                        }
                    </script>
            </div>
        </div>
        {{-- <div>
            <div class="uk-card uk-card-default uk-card-body uk-border-rounded uk-light in-card-purple">
                <i class="fas fa-chart-pie fa-lg in-icon-wrap circle uk-margin-bottom"></i>
                <h4 class="uk-margin-top">
                    <a href="#">USDT<i class="fas fa-chevron-right uk-float-right"></i></a>
                </h4>
                <hr>
                <p class="text-center" style="color: #888;">USDT</p>
                <P class="text-center" style="color: rgb(86, 127, 240); font-weight: 500; font-size: large;">$5000-$50,000</P>
                <p class="text-center" style="color: steelblue; font-weight: 500; font-size: large;">  <input type="text" value="0xde8Df790E9F79474285Af6668EeA7CA33FeE9188"
                    id="myInput">
                    <button onclick="myFunction()">Invest</button>

                    <script>
                        function myFunction() {
                            var copyText =
                            document.getElementById("myInput");
                            copyText.select();
                            copyText.setSelectionRange(0, 99999)
                            document.execCommand("copy");
                            alert("Adress Copied: " +
                            copyText.value);
                        }
                    </script>
            </div>
        </div> --}}
        <h1>Balance:</h1>
        <p class="lead">$0</p>
        <h1>WITHDRAW:</h1>
        <p><iframe src="https://docs.google.com/forms/d/e/1FAIpQLScWS3rlVzqiyUuC9lYTLdAY1IA_ZIosUyHUCdKnCZH4j0wIeQ/viewform?embedded=true" width="640" height="1198" frameborder="0" marginheight="0" marginwidth="0">Loading…</iframe></p>
        {{-- <h1>Time:</h1>
        <p class="lead">10:00pm - 10:30pm, GMT, West Africa.</p>
        <p>Monday 11th July, 2022.</p> --}}
        @endauth
    </div>
        @guest
        <h1>Homepage</h1>
        <p class="lead">Your viewing the home page. Please login to view the restricted data.</p>
        @endguest
    </div>
    <body>
        <!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
    var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
    s1.async=true;
    s1.src='https://embed.tawk.to/637473bab0d6371309cf3f67/1ghve86j1';
    s1.charset='UTF-8';
    s1.setAttribute('crossorigin','*');
    s0.parentNode.insertBefore(s1,s0);
    })();
    </script>
    <!--End of Tawk.to Script-->
    </body>
@endsection
