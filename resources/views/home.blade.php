@extends('layouts.app')

@section('content')
<!-- banner-bottom -->
    <div class="banner-bottom">
        <div class="container">
            <h3><span>Doloremque Laudantium Sed</span> ut perspiciatis unde omnis iste natus error sit voluptatem!</h3>
            <p class="natus">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                                    accusantium doloremque laudantium.</p>
            <div class="banner-bottom-grids">
                <div class="col-md-3 banner-bottom-grid">
                    <a href="single.html"><img src="images/3.jpg" alt=" " /></a>
                    <h4><a href="single.html">Temporibus Autem Quibusdam</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                    et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <div class="more">
                        <a href="single.html">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid">
                    <a href="single.html"><img src="images/4.jpg" alt=" " /></a>
                    <h4 class="line"><a href="single.html">Vel dolorem eum fugiat</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                    et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <div class="more">
                        <a href="single.html">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid">
                    <a href="single.html"><img src="images/5.jpg" alt=" " /></a>
                    <h4><a href="single.html">cupiditate non provident</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                    et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <div class="more">
                        <a href="single.html">Learn More</a>
                    </div>
                </div>
                <div class="col-md-3 banner-bottom-grid">
                    <a href="single.html"><img src="images/6.jpg" alt=" " /></a>
                    <h4 class="line"><a href="single.html">blanditiis atque corrupti</a></h4>
                    <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                    blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                    et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                    <div class="more">
                        <a href="single.html">Learn More</a>
                    </div>
                </div>
                <div class="clearfix"> </div>
            </div>
        </div>
    </div>
<!-- //banner-bottom -->
<!-- services -->
    <div id="services" class="services">
        <div class="container">
            <h3>Services</h3>
            <p class="natus aut">Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
                accusantium doloremque laudantium. repudiandae sint et molestiae non recusandae.
                Itaque earum rerum hic tenetur a sapiente delectus, ut aut reiciendis 
                voluptatibus maiores alias</p>
            <div class="service-grids">
                <ul id="flexiselDemo1">         
                    <li>
                        <div class="service-grid">
                            <div class="glb">
                                <span class="glyphicon iusto glyphicon-globe" aria-hidden="true"></span>
                            </div>
                            <h4><a href="single.html">Temporibus Autem Quibusdam</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                            et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="learn">
                                <a href="single.html">Learn More</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-grid">
                                <div class="glb">
                                    <span class="glyphicon iusto glyphicon-cloud" aria-hidden="true"></span>
                                </div>
                                <h4><a href="single.html">Temporibus Autem Quibusdam</a></h4>
                                <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                                blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                                et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                                <div class="learn">
                                    <a href="single.html">Learn More</a>
                                </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-grid">
                            <div class="glb">
                                <span class="glyphicon iusto glyphicon-star" aria-hidden="true"></span>
                            </div>
                            <h4><a href="single.html">Temporibus Autem Quibusdam</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                            et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="learn">
                                <a href="single.html">Learn More</a>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="service-grid">
                            <div class="glb">
                                <span class="glyphicon iusto glyphicon-signal" aria-hidden="true"></span>
                            </div>
                            <h4><a href="single.html">Temporibus Autem Quibusdam</a></h4>
                            <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui 
                            blanditiis praesentium voluptatum deleniti atque corrupti quos dolores 
                            et quas molestias excepturi sint occaecati cupiditate non provident.</p>
                            <div class="learn">
                                <a href="single.html">Learn More</a>
                            </div>
                        </div>
                    </li>
                </ul>
                <script type="text/javascript">
                require(['flexisel','jquery'],function(flexisel,jquery){
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
                
            <!--//End-slider-script -->
            <div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
                <ul class="rslides">
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
