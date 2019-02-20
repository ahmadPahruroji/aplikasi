<?php

use Illuminate\Database\Seeder;
use App\Member;
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
                "user_id"=>1,
        		"member_id"=>1,
        		"total"=>75000,
                "payment_id"=>1,
        		"date"=>"2019-01-12",
                "status_id"=>2,
                "description"=>""
        	],

        	[
		    	"id"=>2,
                "user_id"=>1,
        		"member_id"=>2,
        		"total"=>75000,
                "payment_id"=>2,
        		"date"=>"2019-01-12",
                "status_id"=>1,
                "description"=>""
        	],
		];

        Countribution::insert($data);		
    }
}
