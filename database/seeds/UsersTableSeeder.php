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
        App\User::create([
            'username' => 'manu2',
            'email' => 'manu@gmail.com',
            'password' => 'pass'
        ]);

        App\User::create([
            'username' => 'janu2',
            'email' => 'janu@gmail.com',
            'password' => 'pass'
        ]);
    }
}
