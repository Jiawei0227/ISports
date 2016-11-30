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
