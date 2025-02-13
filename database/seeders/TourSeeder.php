<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('tours')->insert([
            ['name' => 'Tour 1', 'image1' ,'amount' => 5],
            ['name' => 'Tour 2', 'image2' ,'amount' => 3],
        ]);
    }
}
