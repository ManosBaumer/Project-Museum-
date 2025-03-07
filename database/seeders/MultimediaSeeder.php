<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MultimediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('multimedia')->insert([
            ['video' => 'video1.mp4', 'image' => 'image1.jpg', 'qrcode' => 'qrcode1.png', 'audio' => 'audio1.mp3'],
            
        ]);
    }
}
