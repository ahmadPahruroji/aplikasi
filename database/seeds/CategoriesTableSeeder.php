<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategoriesTableSeeder extends Seeder
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
        		"name"=>"Gaji Petugas",
        		"description"=>"Iuran Gaji Petugas"
        	],

        	[
		    	"id"=>2,
        		"name"=>"Sampah",
        		"description"=>"Iuran Sampah"
        	],
		];

        Category::insert($data);		
    }
}
