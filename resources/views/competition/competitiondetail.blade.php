@extends('layouts.app')
@section('content')
    <div class="contact">
        <div class="container">
            <div class="contact-main">
                <h3>{{ $competition->name }}</h3>
                <div class="row" style="margin-bottom: 5%">
                    <div class="col-md-6">
                        <div class="about-textarea">
                            <label for="author" class="col-md-4">LAUNCHER</label>
                            <label for="author" class="col-md-1">:</label>
                            <div class="col-md-7">
                                {{--<img id="author" src="{{ $user->user_photo }}" width="50" height="50">--}}
                                <p>{{ $user->name }}</p>
                            </div>
                            <label for="email" class="col-md-4">E-MAIL</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="email" class="col-md-7">{{ $user->email }}</p>
                            <label for="intro" class="col-md-4">ENDTIME</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="intro" class="col-md-7">{{ $competition->endtime }}</p>
                            <label for="author" class="col-md-4">COMTYPE</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="author" class="col-md-7">{{ $competition->comType }}</p>
                            <label for="limit" class="col-md-4">LIMIT EXP</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="limit" class="col-md-7">{{ $competition->limit_exp }} exp</p>
                            <label for="money" class="col-md-4">MONEY</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="money" class="col-md-7">{{ $competition->money }} ￥</p>
                            <label for="total" class="col-md-4">REWARD</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="total" class="col-md-7">{{ $competition->total }} ￥</p>
                            <label for="techni" class="col-md-4">DESCRIBITION</label>
                            <label for="author" class="col-md-1">:</label>
                            <p id="techni" class="col-md-7">{{ $competition->description }}</p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="about-textarea">
                            <label for="participant" class="col-md-3">PARTICIPANT</label>
                            <label for="author" class="col-md-1">:</label>

                            <table>
                                
                                    <?php $i = 0; ?>
                                    @foreach($userLists as $puser)
                                    <tr>
                                            <td>
                                                {{ $usersList[$i]->name }}
                                            </td>
                                            <td>
                                                <img src="{{ $usersList[$i]->user_photo }}" width="40" height="40">Task Completion：25%
                                            </td>
                                            <?php $i++; ?>
                                    </tr>
                                    @endforeach
                                
                            </table>

                        </div>
                        <br>
                        <br>
                        <div>
                            <img src="/images/run.jpg">
                        </div>
                        @if(!$isJoin)
                            <div class="contact-textarea">
                                <form method="POST" action={{ url('competition/join') }}>
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