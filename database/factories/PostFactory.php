<?php

namespace Database\Factories;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
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
    public function definition(): array
    {
        $userIds = User::pluck('id');
        $categoryIds = Category::pluck('id');

        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'content' => $this->faker->text(800),
            'image' => 'images/news-700x435-4.jpg',
            'user_id' => $this->faker->randomElement($userIds),
            'category_id' => $this->faker->randomElement($categoryIds)
        ];
    }

    // public function configure()
    // {
    //     return $this->afterCreating(function (Post $post) {
    //         $tagIds = Tag::pluck('id')->random(3); // Change '3' to the desired number of tags per post
    //         $post->tags()->attach($tagIds);
    //     });
    // }
}
