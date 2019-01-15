<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countribution extends Model
{
     protected $guarded = ["id"];

    public function member(){
    	return $this->belongsTo('App\Member');
    }
    
     public function payment(){
        return $this->belongsTo('App\Payment');
    }
    
     public function status(){
        return $this->belongsTo('App\Status');
    }
}
