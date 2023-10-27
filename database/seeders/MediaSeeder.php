<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class MediaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('media')->insert([
            'file' => 'img/1.jpg',
        ]);

        for ($i = 1; $i <= 34; $i++) {
            DB::table('media')->insert([
                'file' => 'img/said_' . $i . '.jpeg',
            ]);
        }
        DB::table('media')->insert([
            'file' => 'img/said_07.jpeg',
        ]);
    }
}
