<?php

namespace Database\Factories;

use App\Models\Client;
use App\Models\Post;
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
    public function definition(): array
    {
        $clientIds = Client::pluck('id');
        $postIds = Post::pluck('id');

        return [
            'client_id' => Client::inRandomOrder()->first()->id,
            'post_id' => Post::inRandomOrder()->first()->id,
            'content' => $this->faker->paragraph()
        ];
    }
}
