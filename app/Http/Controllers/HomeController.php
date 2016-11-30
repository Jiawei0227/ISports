<?php

namespace App\Http\Controllers;
use App\RunRecords;
use App\WalkRecords;
use App\sleeprecord;
use App\weight;
use App\Bloodpressure;
use Auth;
use Illuminate\Http\Request;

class HomeController extends Controller
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

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $runrecords = RunRecords::where('user_id',Auth::user()->id)->get();
        $walkrecords = WalkRecords::where('user_id',Auth::user()->id)->get();
        $sleeprecords = Sleeprecord::where('user_id',Auth::user()->id)->get();
        $weightrecords = weight::where('user_id',Auth::user()->id)->get();
        $bloodpressures = Bloodpressure::where('user_id',Auth::user()->id)->get();
        //跑步数据
        $runday = 0;
        $runcount = 0;
        foreach($runrecords as $runrecord){
            $runcount+=$runrecord->run_record;
            $runday++;
        }
        $runaverage = round($runcount/$runday,3);
        $firstruntime = $runrecords[0]->created_at;
        $lastruntime = $runrecords[$runday-1]->created_at;

        //walk数据
        $walkday = 0;
        $walkcount = 0;
        foreach ($walkrecords as $walkrecord){
            $walkcount+=$walkrecord->walk_record;
            $walkday++;
        }
        $walkaverage = round($walkcount/$walkday,3);
        $firstwalktime = $walkrecords[0]->created_at;
        $lastwalktime = $runrecords[$runday-1]->created_at;
        $lastwalktime = $walkrecords[$walkday-1]->created_at;

        //body数据
        $weightcount = 0;
        $weightday = 0;
        foreach($weightrecords as $weightrecord){
            $weightcount += $weightrecord->weight_data;
            $weightday++;
        }
        $weightaverage = round($weightcount/$weightday,3);
        $firstweighttime = $weightrecords[0]->created_at;
        $lastweighttime = $weightrecords[$weightday-1]->created_at;

        $highbloodcount = 0;
        $lowbloodcount = 0;
        $bloodday = 0;
        foreach($bloodpressures as $bloodpressure){
            $highbloodcount+=$bloodpressure->bloodpressure_high_data;
            $lowbloodcount+=$bloodpressure->bloodpressure_low_data;
            $bloodday ++;
        }
        $highblood_avg = round($highbloodcount/$bloodday,3);
        $lowblood_avg = round($lowbloodcount/$bloodday,3);
        $firstbloodtime = $bloodpressures[0]->created_at;
        $lastbloodtime = $bloodpressures[$bloodday-1]->created_at;

        //sleep数据
        $sleepcount = 0;
        $sleepday = 0;
        foreach($sleeprecords as $sleeprecord){
            $sleepcount += $sleeprecord->sleep_record;
            $sleepday ++;
        }
        $sleepaverage = round($sleepcount/$sleepday,3);
        $firstsleep = $sleeprecords[0]->created_at;
        $lastsleep = $sleeprecords[$sleepday-1]->created_at;
        $re_data = ['runaverage'=>$runaverage,'runtotal'=>$runcount,'runday'=>$runday,'firstruntime'=>$firstruntime,'lastruntime'=>$lastruntime
            ,'walkaverage'=>$walkaverage,'walkcount'=>$walkcount,'walkday'=>$walkday,'firstwalktime'=>$firstwalktime,'lastwalktime'=>$lastwalktime
            ,'weightaverage'=>$weightaverage,'weightday'=>$weightday,'firstweight'=>$firstweighttime,'lastweight'=>$lastweighttime
            ,'highblood_avg'=>$highblood_avg,'lowblood_avg'=>$lowblood_avg,'firstblood'=>$firstbloodtime,'lastblood'=>$lastbloodtime,'bloodday'=>$bloodday
            ,'sleepaverage'=>$sleepaverage,'sleepday'=>$sleepday,'firstsleep'=>$firstsleep,'lastsleep'=>$lastsleep,'sleepcount'=>$sleepcount];
        return view('home',$re_data);
    }

    /**
     * Show the Contact us
     *
     * @return \Illuminate\Http\Response
     */
    public function about()
    {
        return view('about');
    }
}
