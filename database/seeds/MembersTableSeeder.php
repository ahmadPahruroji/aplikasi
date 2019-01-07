<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Member;

class MembersTableSeeder extends Seeder
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
        		"alamat"=>"A1/01",
        		"kk"=>"",
        		"no_hp"=>"",
                "description"=>""
        	],

        	[
		    	"id"=>2,
        		"user_id"=>3,
        		"name"=>"Samsul",
        		"alamat"=>"A1/02",
        		"kk"=>"",
        		"no_hp"=>"",
                "description"=>""
        	],
		];

        Member::insert($data);		
    }
}
