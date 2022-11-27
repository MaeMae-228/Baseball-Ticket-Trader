<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => '山田太郎',
            'email' => 'yamada@ggmail.com',
            'password' => 'yamada',
        ]);
        DB::table('users')->insert([
            'name' => '鈴木次郎',
            'email' => 'suzuki@ggmail.com',
            'password' => 'suzuki',
        ]);
        DB::table('users')->insert([
            'name' => '佐藤三郎',
            'email' => 'sato@ggmail.com',
            'password' => 'sato',
        ]);
        //
    }
}
