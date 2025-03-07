<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MultimediaExhibitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('multimedia_exhibit')->insert([
            ['multimedia_id' => 1, 'exhibit_id' => 1],

        ]);
    }
}
