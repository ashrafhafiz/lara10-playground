<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        // Only with method #1 & to be commented with methods #2 & #3
        // $user_ids = User::pluck('id')->toArray();
        $title = fake()->sentence();
        $slug = Str::slug($title);

        return [
            // add random user for the generated post: Only with method #1 & to be commented with methods #2 & #3
            // 'user_id' => $user_ids[array_rand($user_ids)],
            'title' => $title,
            'slug' => $slug,
            'content' => fake()->paragraph(6),
        ];
    }
}
