<?php

use Illuminate\Database\Seeder;
use App\StatusComplaint;
class StatusComplaintsTableSeeder extends Seeder
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
        		"name"=>"Belum Di Proses",
        		"description"=>"Keluhan Belum di proses"
        	],

        	[
		    	"id"=>2,
        		"name"=>"Sedang Di Proses",
        		"description"=>"Keluhan Sedang di proses"
        	],
            
        	[
		    	"id"=>3,
        		"name"=>"SELESAI",
        		"description"=>"Keluhan Sudah di proses"
        	],
		];

        StatusComplaint::insert($data);		
    }
}
