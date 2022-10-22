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
            'icon' => 'https://caraguna.com/wp-content/uploads/2022/02/expressjs.png',
        ]);
        Topic::create([
            'name' => 'Automation',
            'slug' => '/'.Str::slug('automation'),
            'category_id' => $category1->id,
        ]);

        $category2 = Category::create([
            'name' => 'ReactJS',
            'slug' => '/'.Str::slug('reactjs'),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png',
        ]);
        Topic::create([
            'name' => 'UI/UX',
            'slug' => '/'.Str::slug('uiux'),
            'category_id' => $category2->id,
        ]);

        $category3 = Category::create([
            'name' => 'VueJS',
            'slug' => '/'.Str::slug('vuejs'),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Vue.png/220px-Vue.png',
        ]);
        Topic::create([
            'name' => 'Workflow',
            'slug' => '/'.Str::slug('workflow'),
            'category_id' => $category3->id,
        ]);

        $category4 = Category::create([
            'name' => 'Laravel',
            'slug' => '/'.Str::slug('laravel'),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png',
        ]);
        Topic::create([
            'name' => 'Industrial',
            'slug' => '/'.Str::slug('indusrtial'),
            'category_id' => $category4->id,
        ]);

        $category5 = Category::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
            'icon' => 'https://www.webhozz.com/blog/wp-content/uploads/2021/01/flutter.png',
        ]);
        Topic::create([
            'name' => 'Flutter',
            'slug' => '/'.Str::slug('flutter'),
            'category_id' => $category5->id,
        ]);
    }
}
