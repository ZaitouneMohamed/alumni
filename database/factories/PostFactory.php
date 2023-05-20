<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $title = fake()->sentence() ;
        return [
            'title' => $title,
            'slug' => Str::slug($title),
            'body' =>fake()->paragraph(2),
            'prenium' => fake()->numberBetween($min = 0, $max = 1),
            'published' => fake()->numberBetween($min = 0, $max = 1),
            'user_id' => 1,
            'views' => fake()->numberBetween($min = 10, $max = 100),
            'type' => fake()->numberBetween($min = 1, $max = 3),
            'image' => fake()->imageUrl(640, 480, 'animals', true,'dogs'),
        ];
    }
}
