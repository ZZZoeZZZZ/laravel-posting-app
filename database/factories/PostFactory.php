<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

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
        return [
            // user_idをEloquent ORMで取得
            'user_id' => User::inRandomOrder()->first()->id,
            //title
            'title' => fake()->realText(30, 5),
            // content
            'content' => fake()->realText(150, 5)
        ];
    }
}