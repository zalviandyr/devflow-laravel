<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Post::updateOrCreate([
            'title' => 'Hello World! #1',
        ], [
            'body' => fake()->text(100),
            'topic_id' => 1,
            'is_open' => true,
            'user_id' => 1,
            'slug' => Str::slug('Hello World! #1'),
        ]);
        Post::updateOrCreate([
            'title' => 'Hello World! #2',
        ], [
            'body' => fake()->text(100),
            'topic_id' => 2,
            'is_open' => true,
            'user_id' => 1,
            'slug' => Str::slug('Hello World! #2'),
        ]);
        Post::updateOrCreate([
            'title' => 'Hello World! #3',
        ], [
            'body' => fake()->text(100),
            'topic_id' => 3,
            'is_open' => true,
            'user_id' => 1,
            'slug' => Str::slug('Hello World! #3'),
        ]);
        Post::updateOrCreate([
            'title' => 'Hello World! #4',
        ], [
            'body' => fake()->text(100),
            'topic_id' => 4,
            'is_open' => true,
            'user_id' => 1,
            'slug' => Str::slug('Hello World! #4'),
        ]);
        Post::updateOrCreate([
            'title' => 'Hello World! #5',
        ], [
            'body' => fake()->text(100),
            'topic_id' => 5,
            'is_open' => true,
            'user_id' => 1,
            'slug' => Str::slug('Hello World! #5'),
        ]);
    }
}
