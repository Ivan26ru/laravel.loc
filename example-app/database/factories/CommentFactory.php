<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
        return [
            'body'             => fake()->word(),
            'commentable_id'   => 1,
            'commentable_type' => 'App\Model\Post',
            'user_id'          => rand(1,20),
        ];
    }
}
