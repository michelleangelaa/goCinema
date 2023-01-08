<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('cinemas')->insert([
            [
                'name' => 'Grand Indonesia',
                'region' => 'Jakarta'
            ],
            [
                'name' => 'Senayan City',
                'region' => 'Jakarta'
            ],
            [
                'name' => 'Ciputra World',
                'region' => 'Surabaya'
            ],
            [
                'name' => 'Galaxy',
                'region' => 'Surabaya'
            ],
            [
                'name' => 'Beachwalk',
                'region' => 'Bali'
            ],
            [
                'name' => 'Galeria',
                'region' => 'Bali'
            ]
        ]);
    }
}
