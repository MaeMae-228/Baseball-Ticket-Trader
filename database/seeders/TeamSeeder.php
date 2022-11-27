<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teams')->insert([
            'name' => '東京ヤクルトスワローズ',
        ]);
        DB::table('teams')->insert([
            'name' => '阪神タイガース',
        ]);
        DB::table('teams')->insert([
            'name' => '読売ジャイアンツ',
        ]);
        DB::table('teams')->insert([
            'name' => '広島東洋カープ',
        ]);
        DB::table('teams')->insert([
            'name' => '中日ドラゴンズ',
        ]);
        DB::table('teams')->insert([
            'name' => '横浜DeNAベイスターズ',
        ]);
        DB::table('teams')->insert([
            'name' => 'オリックス・バファローズ',
        ]);
        DB::table('teams')->insert([
            'name' => '千葉ロッテマリーンズ',
        ]);
        DB::table('teams')->insert([
            'name' => '東北楽天ゴールデンイーグルス',
        ]);
        DB::table('teams')->insert([
            'name' => '福岡ソフトバンクホークス',
        ]);
        DB::table('teams')->insert([
            'name' => '北海道日本ハムファイターズ',
        ]);
        DB::table('teams')->insert([
            'name' => '埼玉西武ライオンズ',
        ]);
        //
    }
}
