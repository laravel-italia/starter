<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \App\User::create([
            'name' => 'Francesco',
            'email' => 'user@domain.ext',
            'password' => bcrypt('123456')
        ]);
    }
}
