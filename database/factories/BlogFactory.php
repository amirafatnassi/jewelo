<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Blog>
 */
class BlogFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $categories = [
            'Jewellery Trends',
            'Styling Tips',
            'Gifting Ideas',
            'Behind the Scenes',
            'Customer Stories',
            'Care & Maintenance',
            'Designer Spotlight',
        ];

        // Pick a random image from the public/images/blog folder
        $images = ['blog1.jpg', 'blog2.webp', 'blog3.jpg', 'blog4.jpg', 'blog5.jpg', 'blog6.jpg'];

        return [
            'user_id' => User::inRandomOrder()->first()?->id ?? User::factory(),
            'title' => $this->faker->sentence(6),
            'content' => $this->faker->paragraphs(5, true),
            // 'image' => 'https://placehold.co/800x1015',
            'image' => $this->faker->randomElement($images),
            'category' => $this->faker->randomElement($categories),
            'published_at' => $this->faker->dateTimeBetween('-6 months', 'now'),
            'created_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
