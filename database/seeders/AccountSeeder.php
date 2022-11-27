<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('accounts')->insert([
            'user_id' => 3,
            'bank_name' => '三井住友銀行',
            'branch_id' => 151,
            'account_number' => 8888888,
        ]);
        DB::table('accounts')->insert([
            'user_id' => 4,
            'bank_name' => 'みずほ銀行',
            'branch_id' => 221,
            'account_number' => 7777777,
        ]);
        DB::table('accounts')->insert([
            'user_id' => 5,
            'bank_name' => '三菱UFJ銀行',
            'branch_id' => 111,
            'account_number' => 6666666,
        ]);
        //
        //
    }
}
