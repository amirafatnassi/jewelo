<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call(ColorSeeder::class);
        $this->call(MetalSeeder::class);
        $this->call(BlogSeeder::class);

        \App\Models\Category::factory(7)->create();
        \App\Models\Product::factory(20)->create();
    }
}
