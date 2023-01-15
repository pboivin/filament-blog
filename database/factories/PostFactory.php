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
        $title = preg_replace('/\./', '', $this->faker->sentence(6));

        return [
            'slug' => Str::slug($title),
            'title' => $title,
            'content' => '...',
            'main_image' => 'https://picsum.photos/id/353/800/600',
            'main_image_type' => 'url',
            'category_id' => 1,
        ];
    }
}
