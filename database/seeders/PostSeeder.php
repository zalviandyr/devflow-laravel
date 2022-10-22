<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::create([
            'title' => 'Hello World!',
            'body' => fake()->text(100),
            'topic_id' => 1,
            'is_open' => true,
            'user_id' => 1,
            'slug'=> Str::random(8)
        ]);
        Post::create([
            'title' => 'Hello World!',
            'body' => fake()->text(100),
            'topic_id' => 2,
            'is_open' => true,
            'user_id' => 1,
            'slug'=> Str::random(8)

        ]);
        Post::create([
            'title' => 'Hello World!',
            'body' => fake()->text(100),
            'topic_id' => 3,
            'is_open' => true,
            'user_id' => 1,
            'slug'=> Str::random(8)

        ]);
        Post::create([
            'title' => 'Hello World!',
            'body' => fake()->text(100),
            'topic_id' => 4,
            'is_open' => true,
            'user_id' => 1,
            'slug'=> Str::random(8)

        ]);
        Post::create([
            'title' => 'Hello World!',
            'body' => fake()->text(100),
            'topic_id' => 5,
            'is_open' => true,
            'user_id' => 1,
            'slug'=> Str::random(8)

        ]);
    }
}
