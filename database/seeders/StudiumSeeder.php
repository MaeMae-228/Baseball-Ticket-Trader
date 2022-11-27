<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudiumSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('studiums')->insert([
            'team_id' => 1,
            'name' => '明治神宮野球場',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 2,
            'name' => '阪神甲子園球場',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 3,
            'name' => '東京ドーム',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 4,
            'name' => 'MAZDA Zoom-Zoom スタジアム広島',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 5,
            'name' => 'バンテリンドーム ナゴヤ',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 6,
            'name' => '横浜スタジアム',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 7,
            'name' => '京セラドーム大阪',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 8,
            'name' => 'ZOZOマリンスタジアム',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 9,
            'name' => '楽天生命パーク宮城',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 10,
            'name' => '福岡PayPayドーム',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 11,
            'name' => '札幌ドーム',
        ]);
        DB::table('studiums')->insert([
            'team_id' => 12,
            'name' => 'ベルーナドーム',
        ]);
        //
    }
}
