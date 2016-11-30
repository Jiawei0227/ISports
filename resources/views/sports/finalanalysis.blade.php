@extends('layouts.app')
@section('content')

<div class="banner-bottom">
    <div class="container">
        <h3><span>Sports Data Analysis</span> is a data analysis from your sports data.</h3>
        <p class="natus">Please keep in good health and do more exercise.</p>
        <div class="banner-bottom-grids">
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/runningmanagement') }}><img src="/images/3.jpg" alt=" " /></a>
                <h4><a href={{ url('sports/runningmanagement') }}>Running</a></h4>
                <p>Running day : {{ $runday }} day</p>
                <p>First Run day : {{ $firstruntime }}</p>
                <p>Last  Run day : {{ $lastruntime }}</p>
                <p>Running average per day: {{ $runaverage }} km</p>
                <p>Total Running distance: {{ $runtotal }} km</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/walkingmanagement') }}><img src="/images/4.jpg" alt=" " /></a>
                <h4 class="line"><a href={{ url('sports/walkingmanagement') }}>Walking</a></h4>
                <p>Walking day : {{ $walkday }} day</p>
                <p>First Walk day : {{ $firstwalktime }}</p>
                <p>Last  Walk day : {{ $lastwalktime }}</p>
                <p>Walking average per day: {{ $walkaverage }} path</p>
                <p>Total Walking distance: {{ $walkcount }} path</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/bodymanagement') }}><img src="/images/5.jpg" alt=" " /></a>
                <h4><a href={{ url('sports/bodymanagement') }}>Body</a></h4>
                <p>Weight day : {{ $weightday }} day</p>
                <p>Blood Pressure day : {{ $bloodday }} day</p>
                <p>First Weight day : {{ $firstweight }}</p>
                <p>Last  Weight day : {{ $lastweight }}</p>
                <p>First Blood Pressure day : {{ $firstblood }}</p>
                <p>Last  Blood Pressure day : {{ $lastblood }}</p>
                <p>Weight average: {{ $weightaverage }} KG</p>
                <p>HighBlood Pressure average: {{ $highblood_avg }} mmHg</p>
                <p>LowBlood  Pressure average: {{ $lowblood_avg }} mmHg</p>

            </div>
            <div class="col-md-3 banner-bottom-grid">
                <a href={{ url('sports/sleepanalysis') }}><img src="/images/6.jpg" alt=" " /></a>
                <h4 class="line"><a href={{ url('sports/sleepanalysis') }}>Sleeping</a></h4>
                <p>Sleeping day : {{ $sleepday }} day</p>
                <p>First Sleep day : {{ $firstsleep }}</p>
                <p>Last  Sleep day : {{ $lastsleep }}</p>
                <p>Sleeping average per day: {{ $sleepaverage }} hour</p>
                <p>Total Sleeping hour: {{ $sleepcount }} hour</p>

            </div>
            <div class="clearfix"> </div>
        </div>
    </div>
</div>
@endsection