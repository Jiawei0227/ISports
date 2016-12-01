<?php

namespace App\Http\Controllers;
use App\Comment;
use Illuminate\Support\Facades\Storage;
use Auth;
use App\Moment;
use App\User;
use Illuminate\Http\Request;
use Carbon\Carbon;

class MomentsController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function comment(Request $request){
        $comment = new Comment();
        $comment->moment_id = $request->get('moment_id');
        $comment->user_id = Auth::user()->id;
        $comment->content = $request->get('content');
        //dd($comment);
        $comment->save();

        Auth::user()->experience+=config('moment.experience_per_comment');
        Auth::user()->save();

        $id = $request->get('moment_id');
        $moment = Moment::whereId($id)->first();

        $user = User::whereId($moment->user_id)->first();

        $comments = Comment::where('moment_id',$moment->id)->orderBy('created_at', 'desc')->get();
        //dd($comments);
        $comment_users = collect();
        foreach($comments as $comment){
            $comment_users->push(User::whereId($comment->user_id)->first());
        }

        return redirect('/moments/'.$id)->with('moment',$moment)->with('user',$user)->with('comments',$comments)->with('comment_users',$comment_users);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $moments = Moment::where('created_at','<', Carbon::now())
            ->orderBy('created_at', 'desc')
            ->paginate(config('moment.moment_per_page'));
        $users = collect();
        foreach($moments as $moment){
            $users->push(User::whereId($moment->user_id)->first());
        }
        $recentcomments = Comment::where('created_at','<',Carbon::now())
            ->orderBy('created_at','desc')
            ->take(3)->get();
        $recentcomments_user = collect();
        $recentcomments_moment = collect();
        foreach($recentcomments as $recentcomment){
            $recentcomments_user->push(User::whereId($recentcomment->user_id)->first());
            $recentcomments_moment->push(Moment::whereId($recentcomment->moment_id)->first());
        }
        return view('moments')->with('moments',$moments)->with('users',$users)
            ->with('recentcomments',$recentcomments)
            ->with('recentcomments_user',$recentcomments_user)
            ->with('recentcomments_moment',$recentcomments_moment);
    }

    public function like(){

        $moment = Moment::whereId($_GET['id'])->first();
        $moment->like++;
        $moment->save();
        //dd($moment);
        return response()->json(array('msg'=>$moment->like),200);
    }

    public function detail($id){
        $moment = Moment::whereId($id)->first();

        $user = User::whereId($moment->user_id)->first();

        $comments = Comment::where('moment_id',$moment->id)->orderBy('created_at', 'desc')->get();
        //dd($comments);
        $comment_users = collect();
        foreach($comments as $comment){
            $comment_users->push(User::whereId($comment->user_id)->first());
        }

        $recentcomments = Comment::where('created_at','<',Carbon::now())
            ->orderBy('created_at','desc')
            ->take(3)->get();
        $recentcomments_user = collect();
        $recentcomments_moment = collect();
        foreach($recentcomments as $recentcomment){
            $recentcomments_user->push(User::whereId($recentcomment->user_id)->first());
            $recentcomments_moment->push(Moment::whereId($recentcomment->moment_id)->first());
        }
        //dd($comment_users);
        return view('user.momentdetail')->with('moment',$moment)->with('user',$user)->with('comments',$comments)->with('comment_users',$comment_users)
            ->with('recentcomments',$recentcomments)
            ->with('recentcomments_user',$recentcomments_user)
            ->with('recentcomments_moment',$recentcomments_moment);
    }

    public function launch(Request $request){
        $file = $request->file('picture');
        $moment = new Moment();
        //dd($file);
        // 文件是否上传成功
        if ($file->isValid()) {
            // 获取文件相关信息
            $originalName = $file->getClientOriginalName(); // 文件原名
            $ext = $file->getClientOriginalExtension();     // 扩展名
            $realPath = $file->getRealPath();   //临时文件的绝对路径
            $type = $file->getClientMimeType();     // image/jpeg
            // 上传文件
            $filename = date('Y-m-d-H-i-s') . '-' . uniqid() . '.' . $ext;
            // 使用我们新建的uploads本地存储空间（目录）
            //dd(explode("/",Auth::user()->user_photo)[2]);

            Storage::disk('public')->put($filename, file_get_contents($realPath));
            $moment->photo = "/storage/".$filename;
            $moment->user_id = Auth::user()->id;
            $moment->title = $request->get('moName');
            $moment->content = $request->get('moContent');
            $moment->like = 0;
            //dd($moment);
            $moment->save();

            Auth::user()->experience+=config('moment.experience_per_moment');
            Auth::user()->save();

            return redirect('/user/info')
                ->with('info',"You have created your moment successfully. You gained 5 exp");
        }

    }
}
