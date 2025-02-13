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
            ['title' => 'Exhibit 2', 'description' => 'Description 2', 'artist' => 'Artist 2', 'date' => '2023-02-01', 'location' => 2],
            ['title' => 'Exhibit 3', 'description' => 'Description 3', 'artist' => 'Artist 3', 'date' => '2023-03-01', 'location' => 3],
            ['title' => 'Exhibit 4', 'description' => 'Description 4', 'artist' => 'Artist 4', 'date' => '2023-04-01', 'location' => 4],
        ]);
    }
}
