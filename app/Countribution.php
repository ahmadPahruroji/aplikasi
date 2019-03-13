<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Countribution extends Model
{
     protected $guarded = ["id"];

    public function user(){
        return $this->belongsTo('App\User');
    }

    public function member(){
    	return $this->belongsTo('App\Member');
    }

    public function money(){
        return $this->belongsTo('App\Money');
    }
    
     public function payment(){
        return $this->belongsTo('App\Payment');
    }
    
     public function status(){
        return $this->belongsTo('App\Status');
    }
}
