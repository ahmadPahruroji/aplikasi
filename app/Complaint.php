<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Complaint extends Model
{
     protected $guarded = ["id"];

	public function user(){
    	return $this->belongsTo('App\User');
    }

	public function statuscomplaint(){
        return $this->belongsTo('App\StatusComplaint');
    }    
}
