@extends('layouts.app')

@section('content')

<!-- services -->
<div id="services" class="services">
    <div class="container">
        <h3>Services</h3>
        <p class="natus aut">Here are your sports data,Please click some for more details.</p>
        <div class="service-grids">
            <ul id="flexiselDemo1">
                <li>
                    <div class="service-grid">
                        <div class="glb">
                            <span class="glyphicon iusto glyphicon-globe" aria-hidden="true"></span>
                        </div>
                        <h4><a href={{ url('sports/runningmanagement') }}>Running Data</a></h4>
                        <p>The Running Data is the data you run every day. You can upload your running records through our interface or you can buy our device to upload automatically.</p>
                        <div class="learn">
                            <a href="{{ url('sports/runningmanagement') }}">Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-grid">
                        <div class="glb">
                            <span class="glyphicon iusto glyphicon-cloud" aria-hidden="true"></span>
                        </div>
                        <h4><a href="{{ url('sports/walkingmanagement') }}">Walking Data</a></h4>
                        <p>The Walking Data is the data you walk every day. You can upload your walking records through our interface or you can buy our device to upload automatically.</p>
                        <div class="learn">
                            <a href="{{ url('sports/walkingmanagement') }}">Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-grid">
                        <div class="glb">
                            <span class="glyphicon iusto glyphicon-star" aria-hidden="true"></span>
                        </div>
                        <h4><a href={{ url('sports/sleepanalysis') }}>Sleeping Data</a></h4>
                        <p>The Sleeping Data is the data you sleep every day. You can upload your sleeping records through our interface or you can buy our device to upload automatically.</p>
                        <div class="learn">
                            <a href={{ url('sports/sleepanalysis') }}>Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-grid">
                        <div class="glb">
                            <span class="glyphicon iusto glyphicon-signal" aria-hidden="true"></span>
                        </div>
                        <h4><a href="single.html">Final Analysis Data</a></h4>
                        <p>The final analysis data is the data that collect from your device that records your sports data and analyze the data automatically.</p>
                        <div class="learn">
                            <a href="single.html">Learn More</a>
                        </div>
                    </div>
                </li>
            </ul>
            <script src="/js/lib/jquery.flexisel.js"></script>
            <script type="text/javascript">
                require(['jquery'],function($){
                    $("#flexiselDemo1").flexisel({
                        visibleItems: 4,
                        animationSpeed: 1000,
                        autoPlay: true,
                        autoPlaySpeed: 3000,
                        pauseOnHover: true,
                        enableResponsiveBreakpoints: true,
                        responsiveBreakpoints: {
                            portrait: {
                                changePoint:480,
                                visibleItems: 1
                            },
                            landscape: {
                                changePoint:640,
                                visibleItems:3
                            },
                            tablet: {
                                changePoint:768,
                                visibleItems: 3
                            }
                        }
                    });

                });
            </script>

        </div>
    </div>
</div>
<!-- //services -->
@endsection