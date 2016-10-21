@extends('layouts.app')

@section('content')
<br />
<div class="container">
	<div class="row">
	<div id="container" style="width:1000px; height:600px"></div>
	</div>
	<br />
	<br />
	<div class="row contact-main">
		<div class="col-md-6">
			<div class="about-textarea">
				<h3>Description</h3>
				<h4 align="center">Here are some descriptions for your sleep recently.</h4>
				<label for="intro" class="col-md-3">DSCRIBTION:</label>
				<p id="intro" class="col-md-7">According to the chart showing below, it's easy to say that you have been sleep very well. Please Keep it.</p>
				<label for="state" class="col-md-3">STATEMENT:</label>
				<p id="techni" class="col-md-7">All resources in the station are for learning and reference only, do not use for commercial purposes, otherwise all the consequences will be borne by you!</p>
			</div>
		</div>
		<div class="col-md-6">
			<div class="contact-textarea">
				<form>
					<h3>Submit Today's Sleep Time</h3>
						<h4 align="center">Please submit your sleep today so we can keep track on you.</h4>
						<input type="text" value="Today's Sleeping hour" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}"/>
						<textarea value="Feeling:" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message';}">What's your feeling today?</textarea>
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
	 $('#container').highcharts({
        chart: {
            type: 'line'
        },
        title: {
            text: 'Sleep Records'
        },
        subtitle: {
            text: 'time: 1 year'
        },
        xAxis: {
            categories: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec']
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
            name: '2015',
            data: [7.0, 6.9, 9.5, 14.5, 18.4, 21.5, 25.2, 26.5, 23.3, 18.3, 13.9, 9.6]
        }, {
            name: '2016',
            data: [3.9, 4.2, 5.7, 8.5, 11.9, 15.2, 17.0, 16.6, 14.2, 10.3, 6.6, 4.8]
        }],
        credits: {
        	enabled: false
        }
    });
});
</script>
@endsection