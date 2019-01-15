<?php

use Illuminate\Database\Seeder;
use App\Payment;
class PaymentsTableSeeder extends Seeder
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
        		"name"=>"Cash",
        		"description"=>"Langsung Bayar"
        	],

        	[
		    	"id"=>2,
        		"name"=>"Transfer",
        		"description"=>"Kirim Bayar"
        	],
		];

        Payment::insert($data);		
    }
}
