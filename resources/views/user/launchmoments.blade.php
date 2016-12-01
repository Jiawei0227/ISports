@extends('layouts.app')
@section('content')
    <div id="competition" class="news">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="contact-textarea">
                        <div class="form-group">
                            <h3>Launch Moments</h3>
                            <p class="natus">Please enter the information about the moments you want to launch.</p>
                        </div>

                        <form id="pic" role="form" method="POST" enctype="multipart/form-data" action={{ url('moments/launchmoment') }}>
                            <label for="file" class="col-md-5" style="font-size:25px;" required>EXTRA PHOTO:</label>
                            <input type="file" class="col-md-2" id="file" name="picture">
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <input type="text" value="Moments Name" name="moName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Moments Name';}"/>
                            <textarea value="Moments Content:" name="moContent">Moments Content</textarea>
                            <input type="submit" value="SUBMIT" >
                            <input type="reset" value="CLEAR" >
                        </form>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>

        </div>
    </div>
    </div>
    <br />
    <!-- //news -->
    <style>
        #pic input[type="file"]{
            position: relative;
            display: inline-block;
            background: #FEC514;
            border: none;
            border-radius: 4px;
            margin: 10px 2px 10px 0px;
            padding: 15px 0px;

            color: #fff;
            text-decoration: none;
            text-indent: 0;
            font-size: 18px;
            width: 49%;
            -webkit-appearance: none;
            border-radius: 0.3em;
            -webkit-border-radius: 0.3em;
            -moz-border-radius: 0.3em;
            -o-border-radius: 0.3em;
            -ms-border-radius: 0.3em;
            cursor: pointer;
        }

    </style>
@endsection