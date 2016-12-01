@extends('layouts.app')
@section('content')
    <!-- testimonials -->
    <div class="testimonials" style="background-color: #fff">
        <div class="container">
            <h3>Follow Management</h3>
            <p class="aut" style="color:#000000">Here are all the users that you are following! Enjoy your day with your friends!</p>
            <!-- Slider-starts-Here -->

            <!--//End-slider-script -->
            <div  id="top" class="callbacks_container wow fadeInUp" data-wow-delay="0.5s">
                <ul class="rslides" id="slider3">
                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label style="font-size:26px;" for="email" class="col-md-2 col-md-offset-2 control-label">Friend Email:</label>
                        <div class="contact-textarea">
                        <form role="form" method="POST" action={{ url('user/friendmanagement/addfriend') }}>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <div class="col-md-8">
                            <div class="col-md-6"><input style="width: 100%; height: 50%;" id="email" type="text" class="form-control" name="email" value="{{ old('email') }}" required autofocus></div>
                            <div class="col-md-6"><input style="margin: 0%;" class="col-md-1"type="submit" value="ADD" ></div>
                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                            </form>
                            </div>
                    </div>
                    <br />
                    <br />
                    @foreach($friends as $friend)
                    <li>
                        <div class="testimonials-grids">
                            <div class="testimonials-grid-left">
                                <img src="{{ $friend->user_photo }}" alt=" " width="60" height="60"/>
                            </div>
                            <div class="testimonials-grid-right">
                                <p style="color:blue">{{ $friend->name }}<span><a  style="color:red" href="friendmanagement/deletefriend/{{$friend->id}}"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Unfollow</a></span></p>

                            </div>
                            <div class="clearfix"> </div>
                        </div>
                    </li>
                        <br />
                    @endforeach

                </ul>
            </div>
        </div>

    </div>
@endsection