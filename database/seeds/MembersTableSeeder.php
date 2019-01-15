<?php

use Illuminate\Database\Seeder;
use App\User;
use App\Member;

class MembersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $file = fopen(database_path('csv/members.csv'),"r");
        $data = array();
        while (($row = fgetcsv($file, 0, ",")) !== FALSE) {
            $data[] = $row;
        }
        foreach ($data as $d) {
            $s = new Member();
            $s->id = $d[0];
            $s->user_id = $d[1];
            $s->name = $d[2];
            $s->alamat = $d[3];
            $s->save();
        }   
    }
}
