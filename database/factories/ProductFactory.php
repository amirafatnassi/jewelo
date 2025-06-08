<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $name = $this->faker->words(3, true);
        $oldPrice = $this->faker->randomFloat(2, 150, 300);
        $newPrice = $oldPrice - $this->faker->randomFloat(2, 5, 40);
        $images = [
            '600x765.svg',
            'banner.jpg',
            'bracelet.jpg',
            'chain.jpg',
            'insta1.jpg',
            'insta2.jpg',
            'insta3.jpg',
            'necklace1.jpg',
            'necklace.jpg',
            'pendant.jpg',
            'ring.jpg',
            'wedding-rings.jpg',
        ];
        return [
            'name' => ucfirst($name),
            'slug' => Str::slug($name),
            'description' => $this->faker->sentence(),
            'price' => $newPrice,
            'old_price' => $this->faker->boolean(70) ? $oldPrice : null,
            'label' => $this->faker->randomElement(['new', 'hot', null]),
            'image' => Arr::random($images),
            'category_id' => Category::inRandomOrder()->first()?->id ?? Category::factory(),

        ];
    }
}
