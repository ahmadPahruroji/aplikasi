<?php

use Illuminate\Database\Seeder;
use App\Status;
class StatusesTableSeeder extends Seeder
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
        		"name"=>"LUNAS",
        		"description"=>"Sudah Bayar"
        	],

        	[
		    	"id"=>2,
        		"name"=>"BELUM LUNAS",
        		"description"=>"Belum Bayar"
        	],
		];

        Status::insert($data);		
    }
}
