<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class TicketSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('tickets')->insert([
            [
                'cinema_id' => 1,
                'movie_id' => 1,
                'time' => '13:20',
                'price' => 65000
            ],
            [
                'cinema_id' => 1,
                'movie_id' => 2,
                'time' => '13:20',
                'price' => 65000
            ]
        ]);
    }
}
