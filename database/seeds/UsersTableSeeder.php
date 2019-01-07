<?php

use Illuminate\Database\Seeder;
use App\Role;
use App\User;

class UsersTableSeeder extends Seeder
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
                "role_id"=>1,
                "name"=>"admin",
                "email"=>"admin@admin.com",
                "password"=>bcrypt("password")
            ],
            [
                "id"=>2,
                "role_id"=>2,
                "name"=>"member",
                "email"=>"member@member.com",
                "password"=>bcrypt("password")
            ],
            [
                "id"=>3,
                "role_id"=>2,
                "name"=>"warga",
                "email"=>"warga@warga.com",
                "password"=>bcrypt("password")
            ],
           
        ];
        User::insert($data);
    }
}
