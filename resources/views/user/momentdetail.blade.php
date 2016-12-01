@extends('layouts.app')
@section('content')
<!--single-page-->
<div class="single-page">
    <div class="container">
        <div class="col-md-8 single-page-left">
            <div class="single-page-info">
                <img src="{{ $moment->photo }}" alt=""/>
                <h5>{{ $moment->title }}</h5>
                <p>{{ $moment->content }}</p>

                <div class="comment-icons">
                    <ul>
                        <li><span></span><a href="#">Running Emotion</a> </li>
                        <li><span class="clndr"></span>{{ $moment->created_at }}</li>
                        <li><span class="admin"></span> <a href="#">{{ $user->name }}</a></li>
                        <li><span class="cmnts"></span> <a href="#">{{ $comments->count() }} comments</a></li>
                        <li><a id="like" onclick="like('{{ $moment->id }}')" class="like">{{ $moment->like }}</a></li>
                    </ul>
                </div>
            </div>
            <div class="admin-text">
                <h5>{{ $user->name }}</h5>
                <div class="admin-text-left">
                    <a href="#"><img src={{ $user->user_photo }} alt=""/></a>
                </div>
                <div class="admin-text-right">
                    <p>{{ $user->intro }}</p>
                    <span>View all posts by:<a href="#"> {{ $user->name }}</a></span>
                </div>
                <div class="clearfix"> </div>
            </div>

            <div class="response">
                <h4>Responses</h4>
                <?php $n = 0; ?>
                @foreach($comments as $comment)
                <div class="media response-info">
                    <div class="media-left response-text-left">
                        <a href="#">
                            <img class="media-object" src={{ $comment_users[$n]->user_photo }} alt=""/>
                        </a>
                        <h5><a href="#">{{ $comment_users[$n]->name }}</a></h5>
                    </div>
                    <div class="media-body response-text-right">
                        <p>{{ $comment->content }}</p>
                        <ul>
                            <li>{{ $comment->created_at }}</li>
                        </ul>
                    </div>
                    <div class="clearfix"> </div>
                </div>
                    <?php $n++; ?>
                @endforeach
            </div>

            <div class="coment-form">
                <h4>Leave your comment</h4>
                <form method="post" action={{ url('moments/comment') }}>
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">
                    <input type="hidden" value="{{ $moment->id }}" name="moment_id" readonly>
                    <textarea type="text" name="content" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Your Comment...';}" required="">Your Comment...</textarea>
                    <input type="submit" value="Submit Comment" >
                </form>
            </div>
        </div>
        <div class="col-md-4 single-page-right">
            <div class="category">
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
<!--//single-page-->
@endsection

@section('script')
    <script>
        function like(id){
            $.ajax({
                type:'get',
                url:'/moments/like/{id}',
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                data:{ id: id },
                success:function(data){
                    //alert(data.msg);
                    $("#like").html(data.msg);
                },
            });
        }
    </script>


    @endsection