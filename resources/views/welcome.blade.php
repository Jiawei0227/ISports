<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>iSports</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 100px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body background="/images/bg.jpg" style="background-repeat:no-repeat; background-position: center;">
        <div class="flex-center position-ref full-height">
            @if (Route::has('login')&&Auth::guest())
                <div class="top-right links">
                    <a href="{{ url('/login') }}" style="font-size:18px;">Login</a>
                    <a href="{{ url('/register') }}" style="font-size:18px;">Register</a>
                </div>
            @else
                <div class="top-right links">
                    <a style="font-size:18px;">Welcome,</a>
                    <a href="{{ url('/home') }}" style="font-size:18px;">{{ Auth::user()->name }}</a>
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                    <img src="/images/logo2.png">
                </div>

                <div class="links">
                    <a href="{{url('/sports')}}" style="font-size:18px;">Sports</a>
                    <a href="{{url('/competition')}}" style="font-size:18px;">Competition</a>
                    <a href="{{url('/onlineforum')}}" style="font-size:18px;">OnlineForum</a>
                    <a href="{{url('/about')}}" style="font-size:18px;">About</a>
                </div>
            </div>
        </div>
    </body>
</html>
