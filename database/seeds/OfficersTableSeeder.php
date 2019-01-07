<?php

use Illuminate\Database\Seeder;
use App\Officer;

class OfficersTableSeeder extends Seeder
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
		    	"name"=>"Ridwan",
        		"image"=>"officer/avatar.png",
        		"no_wa"=>"0896654346",
        		"ktp"=>"",
        		"address"=>"",
        		"description"=>""
        	],

        	[
		    	"id"=>2,
		    	"name"=>"Kamil",
        		"image"=>"officer/avatar.png",
        		"no_wa"=>"0896654346",
        		"ktp"=>"",
        		"address"=>"",
        		"description"=>""
        	],
		];

        Officer::insert($data);		
    }
}
