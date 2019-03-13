<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Notifikasi extends Model
{
     // protected $guarded = ["id"];
	protected $table = 'notifikasis';

	protected $fillable = [
		'id',
		'name'
	];
}
