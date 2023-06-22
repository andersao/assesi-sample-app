<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Post::factory()->count(10)->sequence(
            ['year' => 2023],
            ['year' => 2022],
            ['year' => null],
            ['year' => 2021],
            ['year' => 2020],
            ['year' => null],
            ['year' => null],
            ['year' => null],
            ['year' => null],
            ['year' => 2020],
        )->create();
    }
}
