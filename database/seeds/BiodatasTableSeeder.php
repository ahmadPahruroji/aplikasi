<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Biodata;
class BiodatasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = [
		    [
		    	"id"=>1,
        		"user_id"=>2,
        		"first_name"=>"samsul",
        		"last_name"=>"hadi",
        		"no_hp"=>"089665349961",
        		"address"=>"Indramayu"

        	],

        	[
		    	"id"=>2,
        		"user_id"=>3,
        		"first_name"=>"Ujang",
        		"last_name"=>"Kayang",
        		"no_hp"=>"089665349961",
        		"address"=>"Indramayu"
		],

        	];
        Biodata::insert($data);		
    }
}
