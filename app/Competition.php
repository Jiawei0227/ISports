<?php

namespace App;
use App\User;
use Illuminate\Database\Eloquent\Model;

class Competition extends Model
{
    //
    public function user(){
       // dd($this->belongsTo('App\User'));
        return $this->belongsTo('App\User');
    }
}
