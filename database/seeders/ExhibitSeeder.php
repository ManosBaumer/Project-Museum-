<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ExhibitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('exhibits')->insert([
            ['title' => 'Exhibit 1', 'description' => 'Description 1', 'artist' => 'Artist 1', 'date' => '2023-01-01', 'location' => 1],

        ]);
    }
}
