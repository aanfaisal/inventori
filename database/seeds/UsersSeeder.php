<?php

use Illuminate\Database\Seeder;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\User::create([
            'name' => 'Admin',
            'email' => 'didik@gmail.com',
            'password' => bcrypt('didikdwi'),
            'role' => 'admin'
            ]);
        App\User::create([
            'name' => 'member',
            'email' => 'member@gmail.com',
            'password' => bcrypt('didikdwi'),
            'role' => 'member'
            ]);
    }
}
