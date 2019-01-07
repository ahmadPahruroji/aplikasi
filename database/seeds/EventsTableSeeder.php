<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Event;
class EventsTableSeeder extends Seeder
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
		    	"name"=>"HUT RI",
        		"image"=>"event/hut.jpg",
                "date"=>"2019-01-12",
        		"description"=>""
        	],

        	[
		    	"id"=>2,
		    	"user_id"=>2,
		    	"name"=>"HUT RI",
        		"image"=>"event/hut.jpg",
                "date"=>"2019-01-12",
        		"description"=>""
        	],
		];

        Event::insert($data);		
    }
}
