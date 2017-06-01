@extends('layouts.app')

@section('content')
<br />
<div class="container">
	<div class="row">
    </div>
	<br />
	<br />
	<div class="row contact-main">
        <div id="container" style="height:550px" class="col-md-6"></div>

		<div class="col-md-6">
			<div class="about-textarea" style="text-align: left">
				<h3>Description</h3>
				<h4 align="center">Here are some descriptions for your sleep recently.</h4>
				<label for="intro" class="col-md-2" style="font-size: small; margin-top: 5px">DSCRIBTION:</label>
				<p id="intro" class="col-md-10" style="font-size: 16px">According to the chart showing below, it's easy to say that you have been sleep very well. Please Keep it.</p>
				<label for="state" class="col-md-2" style="font-size: small; margin-top: 5px">STATEMENT:</label>
				<p id="techni" class="col-md-10" style="font-size: 16px">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="contact-textarea">
				<form method="POST"  action={{ url('sports/sleepdata') }}>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
					<h3>Submit Today's Sleep Time</h3>
						<h4 align="center">Please submit your sleep today so we can keep track on you.</h4>
						<input type="text" name='sleep_data' value="Today's Sleeping hour" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Today\'s Sleeping hour';}"/>

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
    var sleep_date = [];
    var sleep_data = [];
    @foreach($sleeprecords as $sleeprecord)
        sleep_date.push('{{$sleeprecord->sleep_date}}');
        sleep_data.push({{$sleeprecord->sleep_record}});
    @endforeach
	 $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Sleeping Records'
        },
        subtitle: {
            text: 'time: 1 year'
        },
        xAxis: {
            categories: sleep_date
        },
        yAxis: {
            title: {
                text: 'hour (h)'
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
            name: 'Sleeping Time Records',
            data: sleep_data
        }],
        credits: {
        	enabled: false
        }
    });
});
</script>
@endsection