<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\CategoryTopic;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategoryTopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $category1 = Category::create([
            'name' => 'ExpressJS',
            'slug' => '/'.Str::slug('expressjs'),
            'icon' => '#',
        ]);
        $topic1 = Topic::create([
            'name' => 'Automation',
            'slug' => '/'.Str::slug('automation'),
        ]);

        $category2 = Category::create([
            'name' => 'ReactJS',
            'slug' => '/'.Str::slug('reactjs'),
            'icon' => '#',
        ]);
        $topic2 = Topic::create([
            'name' => 'UI/UX',
            'slug' => '/'.Str::slug('uiux'),
        ]);

        $category3 = Category::create([
            'name' => 'VueJS',
            'slug' => '/'.Str::slug('vuejs'),
            'icon' => '#',
        ]);
        $topic3 = Topic::create([
            'name' => 'Workflow',
            'slug' => '/'.Str::slug('workflow'),
        ]);

        $category4 = Category::create([
            'name' => 'Laravel',
            'slug' => '/'.Str::slug('laravel'),
            'icon' => '#',
        ]);
        $topic4 = Topic::create([
            'name' => 'Industrial',
            'slug' => '/'.Str::slug('indusrtial'),
        ]);

        $category5 = Category::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
            'icon' => '#',
        ]);
        $topic5 = Topic::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
        ]);

        CategoryTopic::create([
            'category_id' => $category1->id,
            'topic_id' => $topic1->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category1->id,
            'topic_id' => $topic2->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category2->id,
            'topic_id' => $topic2->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category2->id,
            'topic_id' => $topic3->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category3->id,
            'topic_id' => $topic3->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category3->id,
            'topic_id' => $topic4->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category4->id,
            'topic_id' => $topic4->id,
        ]);

        CategoryTopic::create([
            'category_id' => $category5->id,
            'topic_id' => $topic5->id,
        ]);
    }
}
