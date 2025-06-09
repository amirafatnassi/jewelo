<?php

namespace Database\Seeders;

use App\Models\Metal;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MetalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Metal::insert([
            ['name' => 'Rose Gold'],
            ['name' => 'Yellow Gold'],
            ['name' => 'Silver'],
            ['name' => 'Platinum'],
        ]);
    }
}
