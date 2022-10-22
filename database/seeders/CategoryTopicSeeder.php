<?php

namespace Database\Seeders;

use App\Models\CategoryTopic;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoryTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        CategoryTopic::create([
            'category_id' => 1,
            'topic_id' => 1,
        ]);

        CategoryTopic::create([
            'category_id' => 2,
            'topic_id' => 2,
        ]);

        CategoryTopic::create([
            'category_id' => 3,
            'topic_id' => 3,
        ]);

        CategoryTopic::create([
            'category_id' => 4,
            'topic_id' => 4,
        ]);

        CategoryTopic::create([
            'category_id' => 5,
            'topic_id' => 5,
        ]);

        CategoryTopic::create([
            'category_id' => 1,
            'topic_id' => 2,
        ]);

        CategoryTopic::create([
            'category_id' => 2,
            'topic_id' => 3,
        ]);

        CategoryTopic::create([
            'category_id' => 3,
            'topic_id' => 4,
        ]);
    }
}
