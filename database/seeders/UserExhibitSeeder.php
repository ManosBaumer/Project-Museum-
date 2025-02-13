<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserExhibitSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('user_exhibit')->insert([
            ['user_id' => 1, 'exhibit_id' => 1, 'is_favorite' => true],
            ['user_id' => 1, 'exhibit_id' => 2, 'is_favorite' => false],
            ['user_id' => 2, 'exhibit_id' => 3, 'is_favorite' => true],
            ['user_id' => 2, 'exhibit_id' => 4, 'is_favorite' => false],
        ]);
    }
}
