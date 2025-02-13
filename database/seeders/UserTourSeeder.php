<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserTourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_tour')->insert([
            ['user_id' => 1, 'tour_id' => 1, 'is_favorite' => true],
            ['user_id' => 1, 'tour_id' => 2, 'is_favorite' => false],
            ['user_id' => 2, 'tour_id' => 1, 'is_favorite' => true],
            ['user_id' => 2, 'tour_id' => 2, 'is_favorite' => false],
        ]);
    }
}
