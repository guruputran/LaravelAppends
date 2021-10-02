<?php

use Illuminate\Database\Seeder;

class DepositsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Deposit::create([
            'depositID' => 'Dep41',
            'amount' => '41',
            'user_id' => '1'
        ]);
        App\Deposit::create([
            'depositID' => 'Dep52',
            'amount' => '122',
            'user_id' => '2'
        ]);
        App\Deposit::create([
            'depositID' => 'Dep62',
            'amount' => '332',
            'user_id' => '2'
        ]);
    }
}
