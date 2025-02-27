<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            ['name' => 'John Doe', 'email' => 'john@example.com', 'password' => Hash::make('password'),'is_admin' => false ],
            ['name' => 'Jane Doe', 'email' => 'jane@example.com', 'password' => Hash::make('password'),'is_admin' => false],
            ['name' => 'Manos Baumer', 'email' => 'manossos06@gmail.com', 'password' => Hash::make('m13579090'),'is_admin' => true],
            ['name' => 'Abdul', 'email' => 'abdul@gmail.com', 'password' => Hash::make('12345678'),'is_admin' => true],
            ['name' => 'Julian Derksen', 'email' => 'juultjederksen@gmail.com', 'password' => Hash::make('12345678'),'is_admin' => true],
            ['name' => 'Tobias Donders', 'email' => 'tjdonders@outlook.com', 'password' => Hash::make('12345678'),'is_admin' => true ],
        ]);
    }
}
