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
            ['video' => 'video2.mp4', 'image' => 'image2.jpg', 'qrcode' => 'qrcode2.png', 'audio' => 'audio2.mp3'],
            ['video' => 'video3.mp4', 'image' => 'image3.jpg', 'qrcode' => 'qrcode3.png', 'audio' => 'audio3.mp3'],
            ['video' => 'video4.mp4', 'image' => 'image4.jpg', 'qrcode' => 'qrcode4.png', 'audio' => 'audio4.mp3'],
        ]);
    }
}
