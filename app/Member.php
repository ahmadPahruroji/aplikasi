<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
     protected $guarded = ["id"];

     public function users(){
    	return $this->belongsTo('App\User');
    }
}
