<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Client;
use App\Models\Comment;
use App\Models\Post;
use App\Models\Tag;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Sequence;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        $categories = Category::factory(5)->create();
        $tags = Tag::factory(10)->create();

        User::factory(3)->create()->each(function ($user) {
            $user->posts()->createMany(
                Post::factory(12)
                ->make([
                    'category_id' => Category::inRandomOrder()->first()->id,
                ])->toArray()
            );
        });

        Client::factory(10)->create()->each(function($client){
            $client->comments()->createMany(
                Comment::factory(3)->make([
                    'post_id' => Post::inRandomOrder()->first()->id
                ])->toArray()
                );
        });

    }
}
