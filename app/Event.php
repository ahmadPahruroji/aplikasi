<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
     protected $guarded = ["id"];

    public function users(){
    	return $this->belongsTo('App\User');
    }
}
