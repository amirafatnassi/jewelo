<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        static $categories = [
            'Rings',
            'Bracelet',
            'Earrings',
            'Necklace',
            'Pendants',
            'Watches',
            'Chain'
        ];

        static $index = 0;

        // Stop generating once all predefined categories are used
        if ($index >= count($categories)) {
            return [
                'name' => null,
                'slug' => null,
                'image' => null,
            ];
        }

        $name = $categories[$index++];
        $slug = Str::slug($name);

        return [
            'name' => $name,
            'slug' => $slug,
            'image' => strtolower($slug) . '.jpg',
        ];
    }
}
