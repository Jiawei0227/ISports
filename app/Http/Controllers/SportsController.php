<?php

namespace App\Http\Controllers;
use App\Bloodpressure;
use App\RunRecords;
use App\WalkRecords;
use App\Weight;
use Auth;
use Carbon\Carbon;
use Illuminate\Http\Request;
use App\Sleeprecord;

class SportsController extends Controller
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
        return view('sports.sportsmanagement');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function bodymanagement()
    {
        $bloodpressure = Bloodpressure::where('user_id',Auth::user()->id)->get();
        $weight = Weight::where('user_id',Auth::user()->id)->get();
        //dd($bloodpressure);
        return view('sports.bodymanagement')->with('bloodpressures',$bloodpressure)->with('weights',$weight);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function sleepanalysis()
    {
        $sleeprecords = Sleeprecord::where('user_id',Auth::user()->id)->get();
        //dd($sleeprecords);
        return view('sports.sleepanalysis')->with('sleeprecords',$sleeprecords);
    }

    public function walkingmanagement()
    {
        $walkrecords = WalkRecords::where('user_id',Auth::user()->id)->get();
        //dd($sleeprecords);
        return view('sports.walkingmanagement')->with('walkrecords',$walkrecords);
    }

    public function runningmanagement()
    {
        $runrecords = RunRecords::where('user_id',Auth::user()->id)->get();
        //dd($sleeprecords);
        return view('sports.runningmanagement')->with('runrecords',$runrecords);
    }

    public function sportsanalysis(){
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
        if($runday == 0) {
            $runaverage = 0;
            $firstruntime = "0";
            $lastruntime = "0";
        }
        else {
            $runaverage = round($runcount / $runday, 3);
            $firstruntime = $runrecords[0]->created_at;
            $lastruntime = $runrecords[$runday - 1]->created_at;
        }

        //walk数据
        $walkday = 0;
        $walkcount = 0;
        foreach ($walkrecords as $walkrecord){
            $walkcount+=$walkrecord->walk_record;
            $walkday++;
        }
        if($walkday == 0) {
            $walkaverage = 0;
            $firstwalktime = "0";
            $lastwalktime = "0";
        }
        else {
            $walkaverage = round($walkcount / $walkday, 3);
            $firstwalktime = $walkrecords[0]->created_at;
            $lastwalktime = $walkrecords[$walkday - 1]->created_at;
        }

        //body数据
        $weightcount = 0;
        $weightday = 0;
        foreach($weightrecords as $weightrecord){
            $weightcount += $weightrecord->weight_data;
            $weightday++;
        }
        if($weightday == 0){
            $weightaverage = "0";
            $firstweighttime = "0";
            $lastweighttime = "0";
        }else {
            $firstweighttime = $weightrecords[0]->created_at;
            $lastweighttime = $weightrecords[$weightday - 1]->created_at;
        }

        $highbloodcount = 0;
        $lowbloodcount = 0;
        $bloodday = 0;
        foreach($bloodpressures as $bloodpressure){
            $highbloodcount+=$bloodpressure->bloodpressure_high_data;
            $lowbloodcount+=$bloodpressure->bloodpressure_low_data;
            $bloodday ++;
        }
        if($bloodday == 0){
            $highblood_avg = 0;
            $lowblood_avg = 0;
            $firstbloodtime = "0";
            $lastbloodtime = "0";
        }
        else {
            $highblood_avg = round($highbloodcount / $bloodday, 3);
            $lowblood_avg = round($lowbloodcount / $bloodday, 3);
            $firstbloodtime = $bloodpressures[0]->created_at;
            $lastbloodtime = $bloodpressures[$bloodday-1]->created_at;
        }


        //sleep数据
        $sleepcount = 0;
        $sleepday = 0;
        foreach($sleeprecords as $sleeprecord){
            $sleepcount += $sleeprecord->sleep_record;
            $sleepday ++;
        }
        if($sleepcount == 0){
            $sleepaverage = 0;
            $firstsleep = "0";
            $lastsleep = "0";
        }
        else {
            $sleepaverage = round($sleepcount / $sleepday, 3);
            $firstsleep = $sleeprecords[0]->created_at;
            $lastsleep = $sleeprecords[$sleepday - 1]->created_at;
        }
        $re_data = ['runaverage'=>$runaverage,'runtotal'=>$runcount,'runday'=>$runday,'firstruntime'=>$firstruntime,'lastruntime'=>$lastruntime
            ,'walkaverage'=>$walkaverage,'walkcount'=>$walkcount,'walkday'=>$walkday,'firstwalktime'=>$firstwalktime,'lastwalktime'=>$lastwalktime
            ,'weightaverage'=>$weightaverage,'weightday'=>$weightday,'firstweight'=>$firstweighttime,'lastweight'=>$lastweighttime
            ,'highblood_avg'=>$highblood_avg,'lowblood_avg'=>$lowblood_avg,'firstblood'=>$firstbloodtime,'lastblood'=>$lastbloodtime,'bloodday'=>$bloodday
            ,'sleepaverage'=>$sleepaverage,'sleepday'=>$sleepday,'firstsleep'=>$firstsleep,'lastsleep'=>$lastsleep,'sleepcount'=>$sleepcount];
        return view('sports.finalanalysis',$re_data);
    }

    public function walkingdata(){
        //dd(11);
        $walkrecord = new WalkRecords();
        $walkrecord->user_id = Auth::user()->id;
        $walkrecord->walk_record = request('walk_data');
        $walkrecord->walk_date = explode(" ",Carbon::now())[0];
        $lastsleep = WalkRecords::where('walk_date',$walkrecord->walk_date)->first();
        if($lastsleep!=null) {
            $lastsleep->sleep_record = request('walk_data');
            $lastsleep->save();
        }
        else
            $walkrecord->save();

        return redirect('/sports/info')
            ->with('info',"You have submitted your walking data of '$walkrecord->walk_date' successfully.");
        // dd($sleeprecord->sleep_date);
    }
    public function runningdata(){
        //dd(11);
        $runrecord = new RunRecords();
        $runrecord->user_id = Auth::user()->id;
        $runrecord->run_record = request('run_data');
        $runrecord->run_date = explode(" ",Carbon::now())[0];
        $lastsleep = RunRecords::where('run_date',$runrecord->run_date)->first();
        if($lastsleep!=null) {
            $lastsleep->run_record = request('run_data');
            $lastsleep->save();
        }
        else
            $runrecord->save();

        return redirect('/sports/info')
            ->with('info',"You have submitted your running data of '$runrecord->run_date' successfully.");
        // dd($sleeprecord->sleep_date);
    }

    public function info(){
        return view('sports.info');
    }

    public function sleepdata(){
        //dd(11);
        $sleeprecord = new Sleeprecord();
        $sleeprecord->user_id = Auth::user()->id;
        $sleeprecord->sleep_record = request('sleep_data');
        $sleeprecord->sleep_date = explode(" ",Carbon::now())[0];
        $lastsleep = Sleeprecord::where('sleep_date',$sleeprecord->sleep_date)->first();
        if($lastsleep!=null) {
            $lastsleep->sleep_record = request('sleep_data');
            $lastsleep->save();
        }
        else
            $sleeprecord->save();

        return redirect('/sports/info')
            ->with('info',"You have submitted your sleep data of '$sleeprecord->sleep_date' successfully.");
       // dd($sleeprecord->sleep_date);
    }

    public function weightdata(){
        //dd(11);
        $weightrecord = new weight();
        $weightrecord->user_id = Auth::user()->id;
        $weightrecord->weight_data = request('weight_data');
        $weightrecord->weight_date = explode(" ",Carbon::now())[0];
        $lastweight = Weight::where('weight_date',$weightrecord->weight_date)->first();
        if($lastweight!=null) {
            $lastweight->weight_data = request('weight_data');
            $lastweight->save();
        }
        else
            $weightrecord->save();

        return redirect('/sports/info')
            ->with('info',"You have submitted your weight data of '$weightrecord->weight_date' successfully.");
        // dd($sleeprecord->sleep_date);
    }

    public function bloodpressuredata(){
        //dd(11);
        $bloodpressure = new Bloodpressure();
        $bloodpressure->user_id = Auth::user()->id;
        $bloodpressure->bloodpressure_high_data = request('high_data');
        $bloodpressure->bloodpressure_low_data = request('low_data');
        $bloodpressure->bloodpressure_date = explode(" ",Carbon::now())[0];
        $lastsleep = Bloodpressure::where('bloodpressure_date',$bloodpressure->bloodpressure_date)->first();
        if($lastsleep!=null) {
            $lastsleep->bloodpressure_high_data = request('high_data');
            $lastsleep->bloodpressure_low_data = request('low_data');
            $lastsleep->save();
        }
        else
            $bloodpressure->save();

        return redirect('/sports/info')
            ->with('info',"You have submitted your bloodpressure data of '$bloodpressure->bloodpressure_date' successfully.");
        // dd($sleeprecord->sleep_date);
    }

    public function sportsdata(){
        return view('sports.sportsdata');
    }
}
