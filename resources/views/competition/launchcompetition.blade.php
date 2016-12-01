@extends('layouts.app')
@section('content')
<!-- start news -->
<div id="competition" class="news">
        <div class="container">
            <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="contact-textarea">
                            <form role="form" method="POST" action={{ url('competition/launchComp') }}>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <h3>Launch Competition</h3>
                                <p class="natus">Please enter the information about the competition you want to launch.</p>
            
                                <div class="row">
                                <div class="col-md-4">
                                <label class="radio-inline">
                                    <input type="radio" name="comType" id="inlineRadio1" value="single">Single Competition
                                </label>
                                </div>
                                <div class="col-md-4">
                                <label class="radio-inline">
                                    <input type="radio" name="comType" id="inlineRadio2" value="group">Group Competition
                                </label>
                                </div>
                                <div>
                                <label class="radio-inline">
                                     <input type="radio" name="comType" id="inlineRadio3" value="target">Target Competition
                                </label>
                                </div>
                                </div>
                                <br />

                                <input type="text" value="Competition Name" name="comName" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Competition Name';}"/>

                                <input type="text" value="Competition Limit Experience" name="comLimit" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Competition Limit Experience';}"/>

                                <input type="text" value="Competition Money" name="comMoney" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Competition Money';}"/>

                                <div class="input-append date form_datetime">
                                    <input size="16" type="text" value="DeadLine" name="comTime" readonly>
                                    <span class="add-on"><i class="icon-th"></i></span>
                                </div>

                                <textarea value="Competition Description:" name="comDesc" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Description';}">Descirption..</textarea>
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
@endsection

@section('script')
<link href="/css/bootstrap-datetimepicker.min.css" rel="stylesheet" type="text/css" media="all" />
<script type="text/javascript">

require(['jquery','datetimepicker'],function($,datetimepicker){
    $(".form_datetime").datetimepicker({
        format: "dd MM yyyy - hh:ii",
        weekStart: 1,
        todayBtn:  1,
        todayHighlight: 1,
        
    });

    });


</script>
@endsection