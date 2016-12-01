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
                    <h4 align="center">Here are some descriptions for your running recently.</h4>
                    <label for="intro" class="col-md-3">DSCRIBTION:</label>
                    <p id="intro" class="col-md-7">According to the chart showing below, it's easy to say that you have been in good health. Please Keep it.</p>
                    <label for="state" class="col-md-3">STATEMENT:</label>
                    <p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
                </div>
            </div>
            <div class="col-md-6">
                <div class="contact-textarea">
                    <form method="POST"  action={{ url('sports/runningdata') }}>
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <h3>Submit Today's Running KM</h3>
                        <h4 align="center">Please submit your running data today so we can keep track on you.</h4>
                        <input type="text" name='run_data' value="Today's Running Meters" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s Running Meters';}"/>

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
            var run_date = [];
            var run_data = [];
            @foreach($runrecords as $runrecord)
                run_date.push('{{$runrecord->run_date}}');
                run_data.push({{$runrecord->run_record}});
            @endforeach
             $('#container').highcharts({
                chart: {
                    type: 'line'
                },
                title: {
                    text: 'Running Records'
                },
                xAxis: {
                    categories: run_date
                },
                yAxis: {
                    title: {
                        text: 'KiloMeters(KM)'
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
                    name: 'Running KM Records',
                    data: run_data
                }],
                credits: {
                    enabled: false
                }
            });
        });
    </script>
@endsection