<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Contact;

class ContactsTableSeeder extends Seeder
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
        		"no_hp"=>"089665349961",
                "description"=>""
        	],

        	[
		    	"id"=>2,
        		"user_id"=>3,
        		"name"=>"samsul",
        		"no_hp"=>"089665349961",
                "description"=>""
        	],
		];

        Contact::insert($data);		
    }
}
