@extends('layouts.app')

@section('content')
<!-- banner-bottom -->
<div class="banner-bottom">
    <div class="container">
        <h3><span>Here is your Sports Data Analysis.</span> UpLoad more datas and become stronger!</h3>
        <p class="natus">Please keep in good health and do more exercise.</p>
        <div class="banner-bottom-grids">
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/runningmanagement') }}><img src="/images/3.jpg" alt=" " /></a>
                <h4><a href={{ url('sports/runningmanagement') }}>Running</a></h4>
                <p>Running day : {{ $runday }} day</p>
                <p>First Run day : {{ $firstruntime }}</p>
                <p>Last  Run day : {{ $lastruntime }}</p>
                <p>Running average per day: {{ $runaverage }} km</p>
                <p>Total Running distance: {{ $runtotal }} km</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/walkingmanagement') }}><img src="/images/4.jpg" alt=" " /></a>
                <h4 class="line"><a href={{ url('sports/walkingmanagement') }}>Walking</a></h4>
                <p>Walking day : {{ $walkday }} day</p>
                <p>First Walk day : {{ $firstwalktime }}</p>
                <p>Last  Walk day : {{ $lastwalktime }}</p>
                <p>Walking average per day: {{ $walkaverage }} path</p>
                <p>Total Walking distance: {{ $walkcount }} path</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/bodymanagement') }}><img src="/images/5.jpg" alt=" " /></a>
                <h4><a href={{ url('sports/bodymanagement') }}>Body</a></h4>
                <p>First Weight day : {{ $firstweight }}</p>
                <p>Last  Weight day : {{ $lastweight }}</p>
                <p>Weight average: {{ $weightaverage }} KG</p>
                <p>HighBlood Pressure average: {{ $highblood_avg }} mmHg</p>
                <p>LowBlood  Pressure average: {{ $lowblood_avg }} mmHg</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/sleepanalysis') }}><img src="/images/6.jpg" alt=" " /></a>
                <h4 class="line"><a href={{ url('sports/sleepanalysis') }}>Sleeping</a></h4>
                <p>Sleeping day : {{ $sleepday }} day</p>
                <p>First Sleep day : {{ $firstsleep }}</p>
                <p>Last  Sleep day : {{ $lastsleep }}</p>
                <p>Sleeping average per day: {{ $sleepaverage }} hour</p>
                <p>Total Sleeping hour: {{ $sleepcount }} hour</p>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
<!-- //banner-bottom -->
<!-- services -->
<div id="services" class="services">
    <div class="container">
        <h3>Here are all the sports data!</h3>
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
                        <h4><a href={{ url('sports/finalanalysis') }}>Sports Data Analysis</a></h4>
                        <p>The final analysis data is the data that collect from your device that records your sports data and analyze the data automatically.</p>
                        <div class="learn">
                            <a href={{ url('sports/finalanalysis') }}>Learn More</a>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="service-grid">
                        <div class="glb">
                            <span class="glyphicon iusto glyphicon-star" aria-hidden="true"></span>
                        </div>
                        <h4><a href={{ url('sports/bodymanagement') }}>Body Data</a></h4>
                        <p>The Body data is the data that collect from your device that records your BODY data and analyze the data automatically.</p>
                        <div class="learn">
                            <a href={{ url('sports/bodymanagement') }}>Learn More</a>
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

<!-- news -->
    <div id="news" class="news">
        <div class="container">
            <h3>News & Events</h3>
            <p class="natus">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
                voluptatibus maiores alias</p>
            <div class="news-grids">
                <div class="col-md-6 news-grid">
                    <div class="col-md-6 news-grd">
                        <p>10<span>JUNE</span>2015</p>
                    </div>
                    <div class="col-md-6 news-grd-right">
                        <h4><a href="single.html">repudiandae sint et molestiae sapiente</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                        Itaque earum rerum hic tenetur a sapiente delectus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 news-grid">
                    <div class="col-md-6 news-grd">
                        <p>20<span>JUNE</span>2015</p>
                    </div>
                    <div class="col-md-6 news-grd-right">
                        <h4><a href="single.html"> Nemo enim ipsam voluptatem quia aspernatur</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                        Itaque earum rerum hic tenetur a sapiente delectus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
            <div class="news-grids">
                <div class="col-md-6 news-grid">
                    <div class="col-md-6 news-grd">
                        <p>10<span>APRIL</span>2015</p>
                    </div>
                    <div class="col-md-6 news-grd-right">
                        <h4><a href="single.html">repudiandae sint et molestiae sapiente</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                        Itaque earum rerum hic tenetur a sapiente delectus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="col-md-6 news-grid">
                    <div class="col-md-6 news-grd">
                        <p>20<span>APRIL</span>2015</p>
                    </div>
                    <div class="col-md-6 news-grd-right">
                        <h4><a href="single.html"> Nemo enim ipsam voluptatem quia aspernatur</a></h4>
                        <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                        accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                        Itaque earum rerum hic tenetur a sapiente delectus.</p>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //news -->
<!-- testimonials -->
    <div class="testimonials">
        <div class="container">
            <h3>Testimonials</h3>
            <p class="aut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
                voluptatibus maiores alias</p>
<!-- Slider-starts-Here -->
                <script src="/js/lib/responsiveslides.min.js"></script>
                 <script>
                    // You can also use "$(window).load(function() {"
                    require(['jquery'],function($){$("#slider3").responsiveSlides({
                        auto: true,
                        pager: true,
                        nav: false,
                        speed: 500,
                        namespace: "callbacks",
                        before: function () {
                          $('.events').append("<li>before event fired.</li>");
                        },
                        after: function () {
                          $('.events').append("<li>after event fired.</li>");
                        }
                      });});
                  </script>
            <!--//End-slider-script -->
            <div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
                <ul class="rslides" id="slider3">
                    <li>
                        <div class="testimonials-grids">
                            <div class="testimonials-grid-left">
                                <img src="images/2.png" alt=" " />
                            </div>
                            <div class="testimonials-grid-right">
                                <p>Ms.Alor Ayyer<span> Tagline</span></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonials-grids">
                            <div class="testimonials-grid-left">
                                <img src="images/3.png" alt=" " />
                            </div>
                            <div class="testimonials-grid-right">
                                <p>Mr.john williums<span> Tagline</span></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                    <li>
                        <div class="testimonials-grids">
                            <div class="testimonials-grid-left">
                                <img src="images/4.png" alt=" " />
                            </div>
                            <div class="testimonials-grid-right">
                                <p>Ms.Dolly Brown<span> Tagline</span></p>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

    </div>
<!-- //testimonials -->
@endsection
