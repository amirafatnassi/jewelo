<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Color::insert([
            ['name' => 'Red',    'hex' => '#FF0000'],
            ['name' => 'Blue',   'hex' => '#0000FF'],
            ['name' => 'Green',  'hex' => '#00FF00'],
            ['name' => 'Black',  'hex' => '#000000'],
            ['name' => 'White',  'hex' => '#FFFFFF'],
            ['name' => 'Yellow', 'hex' => '#FFFF00'],
        ]);
    }
}
