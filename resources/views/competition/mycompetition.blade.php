@extends('layouts.app')
@section('content')
    <div id="competition" class="news">
        <div class="container">
            <h3>My Competition</h3>
            <p class="natus">The following are all the competition you have joined. Click the project, see details of the competition.</p>

            <div class="news-grids">
                <?php $i = 0 ?>
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
                            <h4><a href="/competition/singlecompetition/{{$competition->id}}">{{ $competition->name }}</a></h4>
                            <h4>Type :{{ $competition->comType }}</h4>
                            <h4>Money:{{ $competition->money }} ￥</h4>
                            <h4>Reword:{{ $competition->total }} ￥</h4>
                            <h4 style="color: #2ca02c;">path :{{ $competition_users[$i]->path }}</h4>
                            <p>
                                {{ str_limit($competition->description) }}
                            </p>
                        </div>
                        <div class="clearfix"> </div>
                        <br />
                    </div>
                    <?php $i++; ?>
                @endforeach

                <div class="clearfix"> </div>
            </div>

        </div>
    </div>
    <br />
@endsection