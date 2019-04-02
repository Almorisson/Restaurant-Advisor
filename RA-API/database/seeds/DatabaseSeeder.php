<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // $this->call(UsersTableSeeder::class);

        factory(\App\User::class, 25)->create();
        factory(\App\Model\Restaurant::class, 50)->create();
        factory(\App\Model\Menu::class, 100)->create();



    }
}
