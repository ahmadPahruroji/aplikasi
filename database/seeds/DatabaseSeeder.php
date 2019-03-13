<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);
        $this->call([
            RolesTableSeeder::class,
            UsersTableSeeder::class,
             MembersTableSeeder::class,
            BiodatasTableSeeder::class,
            MoneyTableSeeder::class,
            CategoriesTableSeeder::class,
            PaymentsTableSeeder::class,
            StatusesTableSeeder::class,
            StatusComplaintsTableSeeder::class,
            ContactsTableSeeder::class,
            // CountributionsTableSeeder::class,
            EventsTableSeeder::class,
            OfficersTableSeeder::class,

            ]);
    }
}
