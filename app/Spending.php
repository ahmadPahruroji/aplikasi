<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Spending extends Model
{
     protected $guarded = ["id"];


  public function user(){
    	return $this->belongsTo('App\User');
    }
    
     public function category(){
        return $this->belongsTo('App\Category');
    }
}
