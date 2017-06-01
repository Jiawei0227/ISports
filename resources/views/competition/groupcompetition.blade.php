@extends('layouts.app')
@section('content')
    <div id="competition" class="news">
        <div class="container">
            <h3>Group Competition</h3>
            <p class="natus">The following are all the group competition projects since recently. Click the project, see details of the competition.</p>
            <h5>Page {{ $competitions->currentPage() }} of {{ $competitions->lastPage() }}</h5>

            <div class="news-grids">

                @foreach ($competitions as $competition)
                    <?php
                    $year = explode(" ",$competition->endtime)[0];
                    $month = explode(" ",$competition->endtime)[1];
                    $day = explode(" ",$competition->endtime)[2];

                    ?>
                    <div class="col-md-6 news-grid">
                        <div class="col-md-6 news-grd">
                            <p>{{ $day }}<span>{{$month}}</span>{{$year}}</p>
                        </div>
                        <div class="col-md-6 news-grd-right">
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <h2><a href="/competition/singlecompetition/{{$competition->id}}">{{ $competition->name }}</a></h2>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-3">
                                    <h4>Type</h4>
                                    <h4>Money</h4>
                                    <h4>Reword</h4>
                                </div>
                                <div class="col-md-1">
                                    <h4>:</h4>
                                    <h4>:</h4>
                                    <h4>:</h4>
                                </div>
                                <div class="col-md-4">
                                    <h4>{{ $competition->comType }}</h4>
                                    <h4>{{ $competition->money }}￥</h4>
                                    <h4>{{ $competition->total }}￥</h4>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-1"></div>
                                <div class="col-md-10">
                                    <p>
                                        {{ str_limit($competition->description) }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                        <br />
                    </div>

                @endforeach

                <div class="clearfix"> </div>
            </div>
            {!! $competitions->render() !!}
        </div>
    </div>
    <br />
@endsection