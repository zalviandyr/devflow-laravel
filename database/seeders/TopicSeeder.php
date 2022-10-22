<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopicSeeder extends Seeder
{
    public function run()
    {
        $category1 = Category::create([
            'name' => 'ExpressJS',
            'slug' => '/'.Str::slug('expressjs'),
            'icon' => '#',
        ]);
        Topic::create([
            'name' => 'Automation',
            'slug' => '/'.Str::slug('automation'),
            'category_id' => $category1->id,
        ]);

        $category2 = Category::create([
            'name' => 'ReactJS',
            'slug' => '/'.Str::slug('reactjs'),
            'icon' => '#',
        ]);
        Topic::create([
            'name' => 'UI/UX',
            'slug' => '/'.Str::slug('uiux'),
            'category_id' => $category2->id,
        ]);

        $category3 = Category::create([
            'name' => 'VueJS',
            'slug' => '/'.Str::slug('vuejs'),
            'icon' => '#',
        ]);
        Topic::create([
            'name' => 'Workflow',
            'slug' => '/'.Str::slug('workflow'),
            'category_id' => $category3->id,
        ]);

        $category4 = Category::create([
            'name' => 'Laravel',
            'slug' => '/'.Str::slug('laravel'),
            'icon' => '#',
        ]);
        Topic::create([
            'name' => 'Industrial',
            'slug' => '/'.Str::slug('indusrtial'),
            'category_id' => $category4->id,
        ]);

        $category5 = Category::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
            'icon' => '#',
        ]);
        Topic::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
            'category_id' => $category5->id,
        ]);
    }
}
