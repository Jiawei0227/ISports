@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
        	<div id="weightandheight" style="width:1100px;height:600px;"></div>
            <div class="row contact-main">
                <div class="col-md-6">
                    <div class="about-textarea">
                        <h3>Description</h3>
                        <h4 align="center">Here are some descriptions for your Weight recently.</h4>
                        <label for="intro" class="col-md-3">DSCRIBTION:</label>
                        <p id="intro" class="col-md-7">Accoroding to the chart show below, you are getting more and more heavy!Please keep sports and do more exercise!</p>
                        <label for="state" class="col-md-3">STATEMENT:</label>
                        <p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-textarea">
                        <form method="POST"  action={{ url('sports/weightdata') }}>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h3>Submit Today's Weight:</h3>
                            <h4 align="center">Please submit your weight today so we can keep track on you.</h4>
                            <input type="text" name='weight_data' value="Today's Weight" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s Weight';}"/>

                            <input type="submit" value="SUBMIT" style="width:100%;">
                        </form>
                    </div>
                </div>
            </div>
        </div>
		<div class="col-md-12">
        	<div id="bloodpressure" style="width:1100px;height:400px;"></div>
            <div class="row contact-main">
                <div class="col-md-6">
                    <div class="about-textarea">
                        <h3>Description</h3>
                        <h4 align="center">Here are some descriptions for your Bloodpressure recently.</h4>
                        <label for="intro" class="col-md-3">DSCRIBTION:</label>
                        <p id="intro" class="col-md-7">Accoroding to the chart show below, your boold pressure is getting higher.It's dangerous!Please do more exercise and try to keep in good health!</p>
                        <label for="state" class="col-md-3">STATEMENT:</label>
                        <p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="contact-textarea">
                        <form method="POST"  action={{ url('sports/bloodpressuredata') }}>
                            <input type="hidden" name="_token" value="{{ csrf_token() }}">
                            <h3>Submit Today's Blood Pressure:</h3>
                            <h4 align="center">Please submit your Blood Pressure today so we can keep track on you.</h4>
                            <input type="text" name='high_data' value="Today's High Bloodpressure" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s High Bloodpressure';}"/>
                            <input type="text" name='low_data' value="Today's Low Bloodpressure" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s Low Bloodpressure';}"/>
                            <input type="submit" value="SUBMIT" style="width:100%;">
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

<script src="http://cdn.hcharts.cn/highcharts/highcharts.js"></script>
<script type="text/javascript">
    require(['jquery'],function($) {
        var weight_date = [];
        var weight_data = [];
        @foreach($weights as $weight)
            weight_date.push('{{$weight->weight_date}}');
            weight_data.push({{$weight->weight_data}});
        @endforeach

            $('#weightandheight').highcharts({
            title: {
                text: 'Weight Records',
                x: -20 //center
            },
            xAxis: {
                categories: weight_date
            },
            yAxis: {
                title: {
                    text: 'Kilogramme (kg)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'KG'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'Weight',
                data: weight_data
            }],
            credits: {
                enabled: false
            }
        });


        var blood_date = [];
        var high_data = [];
        var low_data = [];
        @foreach($bloodpressures as $bloodpressure)
            blood_date.push('{{$bloodpressure->bloodpressure_date}}');
            high_data.push({{$bloodpressure->bloodpressure_high_data}});
            low_data.push({{$bloodpressure->bloodpressure_low_data}});
        @endforeach

        $('#bloodpressure').highcharts({
            title: {
                text: 'Blood Pressure Records',
                x: -20 //center
            },
            xAxis: {
                categories: blood_date
            },
            yAxis: {
                title: {
                    text: '(mmHg)'
                },
                plotLines: [{
                    value: 0,
                    width: 1,
                    color: '#808080'
                }]
            },
            tooltip: {
                valueSuffix: 'mmHg'
            },
            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle',
                borderWidth: 0
            },
            series: [{
                name: 'HIGH',
                data: high_data
            }, {
                name: 'LOW',
                data: low_data
            }],
            credits: {
                enabled: false
            }
        });
    });
</script>
@endsection