<?php

namespace App\Http\Controllers;

use App\Sportsrecord;
use Illuminate\Http\Request;

use App\Http\Requests;

class RecordController extends Controller
{
    //
    public function index(){
        $records = Sportsrecord::where('published_at','<=',Carbon::now())
            ->orderBy('published_at',desc)
            ->pageinate(config('record.record_per_page'));

        return view('record.index',compact('posts'));
    }

    public function showRecord(){

    }
}
