<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tickets')->insert([
            'user_id' => 3,
            'home_team_id' => 1,
            'visitor_team_id' => 2,
            'matched_at' => '2022-4-1',
            'seat_type' => '外野指定席B',
            'side' => 'home',
            'price' => 1800,
        ]);
        DB::table('tickets')->insert([
            'user_id' => 5,
            'home_team_id' => 7,
            'visitor_team_id' => 8,
            'matched_at' => '2022-5-11',
            'seat_type' => '下段外野指定席',
            'side' => 'visitor',
            'price' => 2000,
        ]);
        //
    }
}
