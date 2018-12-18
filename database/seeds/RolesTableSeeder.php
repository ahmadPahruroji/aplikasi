<?php

use Illuminate\Database\Seeder;
use App\Role;
class RolesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $data = [
		    [
		    	"id"=>1,
        		"name"=>"admin",
        		"description"=>"Superadmin"
        	],
            [
                "id"=>2,
                "name"=>"member",
                "description"=>"warga"
            ],
            [
                "id"=>3,
                "name"=>"coordinator",
                "description"=>"Koordinator"
            ],

		];

        Role::insert($data);		
    }
    
}
