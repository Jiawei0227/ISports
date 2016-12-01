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
<link href="/css/my.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="/css/flexy-menu.css" rel="stylesheet" type="text/css" media="all" />
    <!-- js -->
<script src="/js/require.min.js" type="text/javascript"></script>
<script src="/js/config.js" type="text/javascript"></script>
<script src="/js/lib/jquery-1.11.1.min.js"></script>
    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>
    
    <script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
        function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- start-smoth-scrolling -->
<script type="text/javascript">
require(['jquery'],function($){
        $(".scroll").click(function(event){     
            event.preventDefault();
            $('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="/js/lib/flexy-menu.js"></script>
<script type="text/javascript">
require(['jquery','flexymenu'],function($,felxymenu){$(".flexy-menu").flexymenu({speed: 600,type: "horizontal",align: "left"});});
</script>

</head>
<body>
<!-- banner -->
    <div @if (Request::is('home')) class="banner" @else class="banner1" @endif>
        <div class="container">
            <div class="banner-navigation">
                <div class="banner-nav">
                        <ul class="flexy-menu orange nav1">
                            <li @if (Request::is('home')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{ url('/home') }}">Home</a></li>
                            <li @if (Request::is('sports*')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="#">Sports</a>
                                <ul>
                                     <li><a href="{{ url('/sports/sportsmanagement') }}">Sports Management</a></li>
                                    <li><a href="{{ url('/sports/bodymanagement') }}">Body Management</a></li>
                                    <li><a href="{{ url('/sports/sleepanalysis') }}">Sleep Analysis</a></li>
                                    <li><a href="{{ url('/sports/sportsdata') }}">Sports Data</a></li>
                                </ul>
                            </li>

                            <li class="hvr-sweep-to-bottom"><a href="#">Competition</a>
                                <ul>
                                    
                                    <li><a href="#">Hippodrome</a>
                                        <ul>
                                            <li @if (Request::is('competition/singlecompetition')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{url('/competition/singlecompetition')}}">Single Competition</a></li>
                                            <li @if (Request::is('competition/groupcompetition')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{url('/competition/groupcompetition')}}">Group Competition</a></li>
                                            <li @if (Request::is('competition/targetcompetition')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{url('/competition/targetcompetition')}}">Target Competition</a></li>
                                        </ul>
                                    </li>
                                    <li @if (Request::is('competition/launchcompetition')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{url('/competition/launchcompetition')}}">Launch Competition</a></li>
                                    <li><a href="{{url('/competition/mycompetition')}}">My Competition</a></li>
                                </ul>
                            </li>
                            <li @if (Request::is('moments')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{url('/moments')}}">Moments</a></li>
                            <li @if (Request::is('about')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif><a href="{{ url('/about') }}">About Us</a></li>
<!-- Authentication Links -->
                        @if (Auth::guest())
                            <li><a href="{{ url('/login') }}">Login</a></li>
                            <li><a href="{{ url('/register') }}">Register</a></li>
                        @else
                            <li @if (Request::is('profile*')) class="hvr-sweep-to-bottom cap" @else class="hvr-sweep-to-bottom" @endif>
                                <a href="#">
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>
                                <ul>
                                    <li>
                                        <a href={{ url('user/usermanagement') }}>
                                            User Management
                                        </a>   
                                    </li>
                                    <li>
                                        <a href={{ url('user/friendmanagement') }}>
                                            Friends Management
                                        </a>   
                                    </li>
                                    <li>
                                        <a href={{ url('user/launchmoments') }}>
                                            Launch My Moments
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
                    <div class="clearfix"> </div>
                </div>
            </div>
            <div class="logo">
                <a href="{{ url('/') }}"><img src="/images/logo.png" alt=" " /></a>
            </div>
        </div>
    </div>
<!-- //banner -->
        @yield('content')


    <!-- footer -->
    <div class="footer">
        <div class="container">
            <div class="footer-grids">
                <div class="col-md-4 footer-grid">
                    <h3>Competition</h3>
                    <ul>
                    <li><a href={{ url('/competition/singlecompetition')}}>Hippodrome</a></li>
                        <li><a href={{ url('/competition/launchcompetition')}}>Launch Competition</a></li>
                        <li><a href={{ url('/competition/mycompetition')}}">My Competition</a></li>
                        </ul>
                </div>
                <div class="col-md-4 footer-grid">
                    <h3>Sports</h3>
                    <ul>
                        <li><a href={{ url('/sports/sportsmanagement')}}>Sports Management</a></li>
                        <li><a href={{ url('/sports/bodymanagement')}}">Body Management</a></li>
                        <li><a href={{ url('/sports/sportsdata')}}>Sports Data</a></li>
                    </ul>
                </div>
                <div class="col-md-4 footer-grid">
                    <h3>Moments</h3>
                    <ul>
                        <li><a href="{{ url('/about')}}">About Us</a></li>
                        <li><a href="{{ url('/about')}}">Contact Us</a></li>
                         <li><a href="{{ url('/home')}}">Home</a></li>
                          <li><a href="{{ url('/user/usermanagement')}}">Profile</a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="footer-bottom">
                <div class="footer-bottom-left">
                    <p>Copyright &copy; 2016.NanJing University Software Engineering - Design by <a href="#" title="" target="_blank">wangjiawei0227@163.com</a></p>
                </div>
                <div class="header-right footer-right">
                    <ul>
                        <li><a href="#" class="facebook"> </a></li>
                        <li><a href="#" class="p"> </a></li>
                        <li><a href="#" class="twitter"> </a></li>
                    </ul>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
    @yield('script')
    <script src="/js/app.js"></script>
</body>
</html>
