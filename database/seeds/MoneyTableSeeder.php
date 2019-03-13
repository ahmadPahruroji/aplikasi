<?php

use Illuminate\Database\Seeder;
use App\Money;
class MoneyTableSeeder extends Seeder
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
        		"money"=>50000,
        		"description"=>"Uang"
        	],

        	[
		    	"id"=>2,
        		"money"=>75000,
        		"description"=>"Uang"
        	],
        	[
		    	"id"=>3,
        		"money"=>100000,
        		"description"=>"Uang"
        	],
		];

        Money::insert($data);		
    }
}
