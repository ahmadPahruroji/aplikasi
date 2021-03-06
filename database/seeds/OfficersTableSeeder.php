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
		    	"name"=>"KONIRI",
        		"image"=>"foto/KONIRI.jpg",
        		"no_wa"=>"087727584323",
        		"ktp"=>"",
        		"address"=>"",
        		"description"=>""
        	],

        	[
		    	"id"=>2,
		    	"name"=>"QODIR",
        		"image"=>"foto/QODIR.jpg",
        		"no_wa"=>"087718863820",
        		"ktp"=>"",
        		"address"=>"",
        		"description"=>""
        	],
            [
                "id"=>3,
                "name"=>"RIGWAN",
                "image"=>"foto/RIGWAN.jpg",
                "no_wa"=>"081807953082",
                "ktp"=>"",
                "address"=>"",
                "description"=>""
            ],

            [
                "id"=>4,
                "name"=>"SAKUDIN",
                "image"=>"foto/SAKUDIN.jpg",
                "no_wa"=>"081947257240",
                "ktp"=>"",
                "address"=>"",
                "description"=>""
            ],
            [
                "id"=>5,
                "name"=>"YANA",
                "image"=>"foto/YANA.jpg",
                "no_wa"=>"087760711755",
                "ktp"=>"",
                "address"=>"",
                "description"=>""
            ],

		];

        Officer::insert($data);		
    }
}
