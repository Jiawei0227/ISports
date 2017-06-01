@extends('layouts.app')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main">
                <h3>Profile</h3>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="oldpic" class="col-md-3 control-label" style="font-size: 20px;">HEAD PHOTO:</label>
                                <div class="col-md-7">
                                    <img id="oldpic" src="{{ url(Auth::user()->user_photo) }}" alt=" " width="200" height="200"/>
                                </div>
                            </div>
                        <div class="about-textarea contact-textarea">

                            <label for="email" class="col-md-3">E-MAIL:</label>
                            <p id="email" class="col-md-7">{{ Auth::user()->email }}</p>

                            <label for="money" class="col-md-3">MY WEALTH:</label>
                            <p style="color: red;" id="money" class="col-md-7">{{ Auth::user()->wealth }} ￥</p>

                            <label for="exper" class="col-md-3">EXPERIENCE:</label>
                            <p id="exper"style="color: blueviolet;" class="col-md-7">{{ Auth::user()->experience }} exp</p>

                            <form method="post" action="/user/userdata">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-3 control-label">Name:</label>
                                <div class="col-md-7">
                                    <input id="name" name="name" type="text" class="form-control" value="{{ Auth::user()->name }}" required autofocus>

                                    @if ($errors->has('name'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>


                            <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                                <label for="intro" class="col-md-3 control-label">INTRODUCTION:</label>
                                <div class="col-md-7">
                                    <textarea id="intro" name="intro" type="text" class="form-control" style="margin-bottom: 1em;" value="" required autofocus>{{ Auth::user()->intro }}</textarea>

                                    @if ($errors->has('intro'))
                                        <span class="help-block">
                                        <strong>{{ $errors->first('intro') }}</strong>
                                    </span>
                                    @endif
                                </div>
                            </div>

                                <div class="form-group">
                                <form id="pic" method="post" enctype="multipart/form-data" action={{ url('user/userphoto') }}>
                                    {{ csrf_field() }}
                                        <a href="javascript:;" class="file col-md-7"> File    Select
                                            <input type="file" name="picture" id="file" >
                                        </a>
                                        <input type="submit" value="SUBMITPHOTO" style="float:left">
                                </form>
                                </div>


                                <input style="width:98%;" type="submit" value="SUBMITCHANGE">
                            </form>
                            <br />

                            <br />
                        
                        </div>


                    </div>
                </div>
                <br />
                <br />
            </div>
        </div>
    </div>

    <style>
        .file {
            position:relative;
            border: none;
            outline: none;
            color: #fff;
            background: #FEC514;
            width: 49%;
            padding: 15px 0px;
            font-size: 18px;
            margin: 10px 2px 0px 0px;
            -webkit-appearance: none;
            border-radius: 0.3em;
            -webkit-border-radius: 0.3em;
            -moz-border-radius: 0.3em;
            -o-border-radius: 0.3em;
            -ms-border-radius: 0.3em;
            overflow: hidden;
            text-align: center;
            float:left;

        }
        .file input {
            position: absolute;
            font-size: 100px;
            right: 0;
            top: 0;
            opacity: 0;
        }
        .file:hover {
            background:#527994;
            transition: 0.5s all;
            -webkit-transition: 0.5s all;
            -moz-transition: 0.5s all;
            -ms-transition: 0.5s all;
            -o-transition: 0.5s all;
        }


    </style>
@endsection