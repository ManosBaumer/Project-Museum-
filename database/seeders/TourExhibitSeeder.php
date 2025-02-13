<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourExhibitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tour_exhibit')->insert([
            ['tour_id' => 1, 'exhibit_id' => 1],
            ['tour_id' => 1, 'exhibit_id' => 2],
            ['tour_id' => 2, 'exhibit_id' => 3],
            ['tour_id' => 2, 'exhibit_id' => 4],
        ]);
    }
}
