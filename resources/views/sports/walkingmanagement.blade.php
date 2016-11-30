@extends('layouts.app')

@section('content')
    <br />
    <div class="container">
        <div class="row">
            <div id="container" style="width:1100px; height:600px"></div>
        </div>
        <br />
        <br />
        <div class="row contact-main">
            <div class="col-md-6">
                <div class="about-textarea">
                    <h3>Description</h3>
                    <h4 align="center">Here are some descriptions for your walk recently.</h4>
                    <label for="intro" class="col-md-3">DSCRIBTION:</label>
                    <p id="intro" class="col-md-7">According to the chart showing below, it's easy to say that you have not been walking very well. Please do more exercise.</p>
                    <label for="state" class="col-md-3">STATEMENT:</label>
                    <p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-textarea">
                    <form method="POST"  action={{ url('sports/walkingdata') }}>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h3>Submit Today's Walking Path</h3>
                        <h4 align="center">Please submit your sleep today so we can keep track on you.</h4>
                        <input type="text" name='walk_data' value="Today's Walking Path" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s Walking Path';}"/>

                        <input type="submit" value="SUBMIT" style="width:100%;">
                    </form>
                </div>
            </div>
        </div>
    </div>
    <br />
    <br />
    <script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
    <script type="text/javascript">
        require(['jquery'],function($){
            var walk_date = [];
            var walk_data = [];
            @foreach($walkrecords as $walkrecord)
                walk_date.push('{{$walkrecord->walk_date}}');
            walk_data.push({{$walkrecord->walk_record}});
            @endforeach
             $('#container').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Walking Path Records'
                },
                xAxis: {
                    categories: walk_date
                },
                yAxis: {
                    title: {
                        text: 'Path(step)'
                    }
                },
                plotOptions: {
                    line: {
                        dataLabels: {
                            enabled: true
                        },
                        enableMouseTracking: false
                    }
                },
                series: [{
                    name: 'Walking Steps',
                    data: walk_data
                }],
                credits: {
                    enabled: false
                }
            });
        });
    </script>
@endsection