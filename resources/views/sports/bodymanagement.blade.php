@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        	<div id="weightandheight" style="width:600px;height:400px;"></div>
            <div class="panel panel-default">
                <div class="panel-heading">Weight and Height</div>
                <div class="panel-body">
                	<p>Accoroding to the chart show below, you are getting more and more heavy!</p>
                	<p>Please keep sports and do more exercise!</p>
                </div>
            </div>
            <div class="input-group">
            	<p>Enter today's weight:</p>
      			<span><input type="text" class="form-control"></span>
      			<span class="input-group-btn">
        			<button class="btn btn-default" type="button">submit</button>
      			</span>
    		</div><!-- /input-group -->
        </div>
		<div class="col-md-8">
        	<div id="bloodpressure" style="width:600px;height:400px;"></div>
            <div class="panel panel-default">
                <div class="panel-heading">Blood Pressure</div>
                <div class="panel-body">
                	<p>Accoroding to the chart show below, your boold pressure is getting higher.It's dangerous!</p>
                	<p>Please do more exercise and try to keep in good health!</p>
                </div>
            </div>
            <div class="input-group">
            	<p>Enter today's boold pressure:</p>
      			<span><input type="text" class="form-control"></span>
      			<span class="input-group-btn">
        			<button class="btn btn-default" type="button">submit</button>
      			</span>
    		</div><!-- /input-group -->
        </div>

    </div>
</div>
<script src="/js/lib/jquery-1.11.2.min.js" type="text/javascript"></script>
<script src="/js/lib/echarts.min.js" type="text/javascript"></script>
<script type="text/javascript">
var weightChart = echarts.init(document.getElementByID('weightandheight'))
weightandheightOption = {
    title: {
        text: '身高体重记录',
        subtext: '纯属虚构'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['最高气温','最低气温']
    },
    toolbox: {
        show: true,
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            dataView: {readOnly: false},
            magicType: {type: ['line', 'bar']},
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis:  {
        type: 'category',
        boundaryGap: false,
        data: ['周一','周二','周三','周四','周五','周六','周日']
    },
    yAxis: {
        type: 'value',
        axisLabel: {
            formatter: '{value} °C'
        }
    },
    series: [
        {
            name:'最高气温',
            type:'line',
            data:[11, 11, 15, 13, 12, 13, 10],
            markPoint: {
                data: [
                    {type: 'max', name: '最大值'},
                    {type: 'min', name: '最小值'}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: '平均值'}
                ]
            }
        },
        {
            name:'最低气温',
            type:'line',
            data:[1, -2, 2, 5, 3, 2, 0],
            markPoint: {
                data: [
                    {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: '平均值'},
                    [{
                        symbol: 'none',
                        x: '90%',
                        yAxis: 'max'
                    }, {
                        symbol: 'circle',
                        label: {
                            normal: {
                                position: 'start',
                                formatter: '最大值'
                            }
                        },
                        type: 'max',
                        name: '最高点'
                    }]
                ]
            }
        }
    ]
};
weightChart.setOption(weightandheightOption)

var bloodpressureChart = echarts.init(document.getElementByID('bloodpressure'))
bloodpressureOption = {
    title: {
        text: '血压变化情况',
        subtext: '纯属虚构'
    },
    tooltip: {
        trigger: 'axis'
    },
    legend: {
        data:['最高气温','最低气温']
    },
    toolbox: {
        show: true,
        feature: {
            dataZoom: {
                yAxisIndex: 'none'
            },
            dataView: {readOnly: false},
            magicType: {type: ['line', 'bar']},
            restore: {},
            saveAsImage: {}
        }
    },
    xAxis:  {
        type: 'category',
        boundaryGap: false,
        data: ['周一','周二','周三','周四','周五','周六','周日']
    },
    yAxis: {
        type: 'value',
        axisLabel: {
            formatter: '{value} °C'
        }
    },
    series: [
        {
            name:'最高气温',
            type:'line',
            data:[11, 11, 15, 13, 12, 13, 10],
            markPoint: {
                data: [
                    {type: 'max', name: '最大值'},
                    {type: 'min', name: '最小值'}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: '平均值'}
                ]
            }
        },
        {
            name:'最低气温',
            type:'line',
            data:[1, -2, 2, 5, 3, 2, 0],
            markPoint: {
                data: [
                    {name: '周最低', value: -2, xAxis: 1, yAxis: -1.5}
                ]
            },
            markLine: {
                data: [
                    {type: 'average', name: '平均值'},
                    [{
                        symbol: 'none',
                        x: '90%',
                        yAxis: 'max'
                    }, {
                        symbol: 'circle',
                        label: {
                            normal: {
                                position: 'start',
                                formatter: '最大值'
                            }
                        },
                        type: 'max',
                        name: '最高点'
                    }]
                ]
            }
        }
    ]
};
bloodpressureChart.setOption(bloodpressureOption)
</script>
@endsection