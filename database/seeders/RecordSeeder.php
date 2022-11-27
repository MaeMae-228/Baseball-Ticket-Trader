<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RecordSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('records')->insert([
            'ticket_id' => 3,
            'seller_id' => 3,
            'buyer_id' => 4,
            'sold_at' => now(),
            'bought_at' => now(),
        ]);
        DB::table('records')->insert([
            'ticket_id' => 4,
            'seller_id' => 5,
            'buyer_id' => 3,
            'sold_at' => now(),
            'bought_at' => now(),
        ]);
        //
    }
}
