<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;



class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        // Movie::factory(5)->create();
        DB::table('movies')->insert([
            [
                'title' => 'Avatar 2',
                'release_date' => Carbon::create('2022', '12', '14'),
                'currently_showing' => true,
                'likes' => 1500,
                'picture' => 'avatar.jpg'
            ],
            [
                'title' => 'Cek Toko Sebelah 2',
                'release_date' => Carbon::create('2022', '12', '22'),
                'currently_showing' => true,
                'likes' => 300,
                'picture' => 'cektokosebelah.jpg'
            ],
            [
                'title' => 'M3GAN',
                'release_date' => Carbon::create('2023', '01', '06'),
                'currently_showing' => true,
                'likes' => 12,
                'picture' => 'm3gan.jpg'
            ],
            [
                'title' => 'Infinity Pool',
                'release_date' => Carbon::create('2023', '02', '11'),
                'currently_showing' => false,
                'likes' => 20,
                'picture' => 'infinitypool.jpg'
            ],
            [
                'title' => 'A Man Called Otto',
                'release_date' => Carbon::create('2023', '02', '20'),
                'currently_showing' => false,
                'likes' => 50,
                'picture' => 'amancalledotto.jpg'
            ],
            [
                'title' => 'The Quiet Girl',
                'release_date' => Carbon::create('2023', '02', '28'),
                'currently_showing' => false,
                'likes' => 3,
                'picture' => 'thequiegirl.jpg'
            ]
        ]);
    }
}
