@extends('layouts.app')

@section('content')
<div class="blog">
        <div class="container">
            <div class="col-md-8 blog-left" >
                <?php $i=0; ?>
                @foreach($moments as $moment)
                <div class="blog-info">
                    <h4><a href={{ url('moments/'.$moment->id) }}>{{ $moment->title }}</a></h4>
                    <p>Posted By <a href="#">{{ $users[$i]->name }}</a> &nbsp;&nbsp; on {{ $moment->created_at }} &nbsp;&nbsp; <a href="#">Like {{ $moment->like }}</a></p>
                    <div class="blog-info-text">
                        <div class="blog-img">
                            <a href={{ url('moments/'.$moment->id) }}> <img src={{ $moment->photo }} alt=""/></a>
                        </div>
                        <h5><a href={{ url('moments/'.$moment->id) }}>{{ $moment->title }}</a></h5>
                        <p class="snglp">{{ $moment->content }}</p>
                        <a href="{{ url('moments/'.$moment->id) }}" class="btn btn-primary hvr-rectangle-in">Read More</a>
                    </div>  
                </div>
                    <?php $i++;?>
                @endforeach
                    {!! $moments->render() !!}
            </div>  
            <div class="col-md-4 single-page-right">
                <div class="category blog-ctgry">
                    <h4>Categories</h4>
                    <div class="list-group">
                        <a href="#" class="list-group-item">Running Emotion</a>
                        <a href="#" class="list-group-item">Walking Emotion</a>
                        <a href="#" class="list-group-item">Swimming Emotion</a>
                        <a href="#" class="list-group-item">Sports Emotion</a>
                        <a href="#" class="list-group-item">Everyday Emotion</a>
                        <a href="#" class="list-group-item">Daily Life</a>
                        <a href="#" class="list-group-item">Sports Learining</a>
                        <a href="#" class="list-group-item">Life Goes on</a>
                    </div>
                </div>  


                <div class="comments">
                    <h4>Recent comments</h4>
                    <?php $i = 0;?>
                    @foreach($recentcomments as $recentcomment)
                    <div class="comments-info cmnts-mddl">
                        <div class="cmnt-icon-left">
                            <a href="single.html"><img src="{{ $recentcomments_user[$i]->user_photo }}" alt=""/></a>
                        </div>
                        <div class="cmnt-icon-right">
                            <p>{{ $recentcomment->created_at }}</p>
                            <p><a href="#">{{  $recentcomments_user[$i]->name }}</a></p>
                            <p><a style="color:blue;" href={{ url('moments/'.$recentcomments_moment[$i]->id) }}>{{ $recentcomments_moment[$i]->title }}</a></p>
                        </div>
                        <div class="clearfix"> </div>
                        <p class="cmmnt">{{  $recentcomment->content }}</p>
                    </div>
                        <?php $i++; ?>
                    @endforeach
                </div>
            </div>
            <div class="clearfix"> </div>

        </div>  
    </div>  
<!--//blog-->
@endsection
