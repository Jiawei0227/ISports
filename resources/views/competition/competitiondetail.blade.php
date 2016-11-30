@extends('layouts.app')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main">
                <h3>{{ $competition->name }}</h3>
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="about-textarea">
                            <label for="author" class="col-md-3">LAUNCHER:</label>
                            <p id="author" class="col-md-7">{{ $user->name }}</p>
                            <label for="email" class="col-md-3">E-MAIL:</label>
                            <p id="email" class="col-md-7">{{ $user->email }}</p>
                            <label for="intro" class="col-md-3">ENDTIME:</label>
                            <p id="intro" class="col-md-7">{{ $competition->endtime }}</p>
                            <label for="author" class="col-md-3">COMTYPE:</label>
                            <p id="author" class="col-md-7">{{ $competition->comType }}</p>
                            <label for="money" class="col-md-3">MONEY:</label>
                            <p id="money" class="col-md-7">{{ $competition->money }} ￥</p>
                            <label for="total" class="col-md-3">REWARD:</label>
                            <p id="total" class="col-md-7">{{ $competition->total }} ￥</p>
                            <label for="techni" class="col-md-3">DESCRIBITION:</label>
                            <p id="techni" class="col-md-7">{{ $competition->description }}</p>
                            <label for="participant" class="col-md-3">PARTICIPANT:</label>
                            <div id="participant" class="col-md-7">
                                @foreach($userLists as $puser)
                                    <label style="color:#02b8fa;" class="col-md-6" id="{{ $puser->user_id }}">{{ $puser->user_name }}</label>
                                    <label style="color:#02b8fa;" for="{{ $puser->user_id }}" class="col-md-3">PATH: {{ $puser->path }}</label>
                                @endforeach
                            </div>
                        </div>
                        <br />
                        <br />
                        @if(!$isJoin)
                        <div class="contact-textarea">
                            <form method="POST"  action={{ url('competition/join') }}>
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <input type="hidden" value="{{ $competition->id }}" name="competition_id" readonly>
                                <input type="submit" value="JOIN IT !" style="width: 100%;">
                            </form>

                        </div>
                            @else
                            <div class="contact-textarea">
                                <form>
                                    <input type="submit" value="YOU HAVE JOINED IT !" style="width: 100%;">
                                </form>

                            </div>
                            @endif
                    </div>

                </div>
            </div>

        </div>
    </div>
@endsection