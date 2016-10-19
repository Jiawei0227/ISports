<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'iSports') }}</title>

    <!-- Styles -->
    <link href="/css/app.css" rel="stylesheet">

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
</head>
<body>
    <div id="app">
        <nav class="navbar navbar-default navbar-static-top">
            <div class="container">
                <div class="navbar-header">

                    <!-- Collapsed Hamburger -->
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                        <span class="sr-only">Toggle Navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <!-- Branding Image -->
                    <a class="navbar-brand" href="{{ url('/') }}">
                        {{ config('app.name', 'iSports') }}
                    </a>
                </div>

                <div class="collapse navbar-collapse" id="app-navbar-collapse">
                    <!-- Left Side Of Navbar -->
                    <ul class="nav navbar-nav">
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Sports<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                     <li><a href="{{ url('/sports/sportsmanagement') }}">Sports Management</a></li>
                                    <li><a href="{{ url('/sports/bodymanagement') }}">Body Management</a></li>
                                    <li><a href="{{ url('/sports/sleepanalysis') }}">Sleep Analysis</a></li>
                                    <li><a href="{{ url('/sports/sportsdata') }}">Sports Data</a></li>
                                </ul>
                        </li>

                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Competition<span class="caret"></span></a>
                                <ul class="dropdown-menu" role="menu">
                                     <li><a href="{{ url('/competition/Hippodrome') }}">Hippodrome</a></li>
                                    <li><a href="{{ url('/competition/mycompetition') }}">My Competition</a></li>
                                    <li><a href="{{ url('/competition/challenge') }}">Challenge</a></li>
                                    <li><a href="{{ url('/competition/competition') }}">Competition</a></li>
                                </ul>
                        </li>
                        <li @if (Request::is('onlineforum')) class="active" @endif><a href="{{ url('/onlineforum') }}">Online Forum</a></li>
                    </ul>


                    <!-- Right Side Of Navbar -->
                    <ul class="nav navbar-nav navbar-right">
                        <!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <ul class="dropdown-menu" role="menu">
                                    <li>
                                        <a href="#">
                                            User Management
                                        </a>
    
                                    </li>
                                    <li>
                                        <a href="#">
                                            Friends Management
                                        </a>
    
                                    </li>
                                    <li>
                                        <a href="#">
                                            Property Management
                                        </a>
    
                                    </li>
                                    <li class="divider"></li>
                                    <li>
                                        <a href="{{ url('/logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>

                                        <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>

                                </ul>
                            </li>
                        @endif
                    </ul>
                </div>
            </div>
        </nav>
        @yield('content')
    </div>

    <!-- Scripts -->
    <script src="/js/app.js"></script>
</body>
</html>
