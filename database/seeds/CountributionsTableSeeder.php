<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Countribution;

class CountributionsTableSeeder extends Seeder
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
        		"name"=>"ujang",
        		"month"=>"Januari",
        		"total"=>75000,
        		"date"=>"2019-01-12",
                "status"=>"LUNAS",
                "description"=>""
        	],

        	[
		    	"id"=>2,
        		"user_id"=>3,
        		"name"=>"samsul",
        		"month"=>"Januari",
        		"total"=>75000,
        		"date"=>"2019-01-12",
                "status"=>"LUNAS",
                "description"=>""
        	],
		];

        Countribution::insert($data);		
    }
}
