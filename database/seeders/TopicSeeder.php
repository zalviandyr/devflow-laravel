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
        $category1 = Category::updateOrCreate([
            'name' => 'ExpressJS',
        ], [
            'slug' => Str::slug('expressjs'.' '.Str::random()),
            'icon' => 'https://caraguna.com/wp-content/uploads/2022/02/expressjs.png',
        ]);
        Topic::updateOrCreate(['name' => 'Automation',
        ], [
            'slug' => Str::slug('automation'.' '.Str::random()),
            'category_id' => $category1->id,
        ]);

        $category2 = Category::updateOrCreate([
            'name' => 'ReactJS',
        ], [
            'slug' => Str::slug('reactjs'.' '.Str::random()),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/a/a7/React-icon.svg/1200px-React-icon.svg.png',
        ]);
        Topic::updateOrCreate([
            'name' => 'UI/UX',
        ], [
            'slug' => Str::slug('uiux'.' '.Str::random()),
            'category_id' => $category2->id,
        ]);

        $category3 = Category::updateOrCreate([
            'name' => 'VueJS',
        ], [
            'slug' => Str::slug('vuejs'.' '.Str::random()),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/f/f1/Vue.png/220px-Vue.png',
        ]);
        Topic::updateOrCreate([
            'name' => 'Workflow',
        ], [
            'slug' => Str::slug('workflow'.' '.Str::random()),
            'category_id' => $category3->id,
        ]);

        $category4 = Category::updateOrCreate([
            'name' => 'Laravel',
        ], [
            'slug' => Str::slug('laravel'.' '.Str::random()),
            'icon' => 'https://upload.wikimedia.org/wikipedia/commons/thumb/9/9a/Laravel.svg/1200px-Laravel.svg.png',
        ]);
        Topic::updateOrCreate([
            'name' => 'Industrial',
        ], [
            'slug' => Str::slug('indusrtial'.' '.Str::random()),
            'category_id' => $category4->id,
        ]);

        $category5 = Category::updateOrCreate([
            'name' => 'Flutter',
        ], [
            'slug' => Str::slug('flutter'.' '.Str::random()),
            'icon' => 'https://www.webhozz.com/blog/wp-content/uploads/2021/01/flutter.png',
        ]);
        Topic::updateOrCreate([
            'name' => 'Flutter',
        ], [
            'slug' => Str::slug('flutter'.' '.Str::random()),
            'category_id' => $category5->id,
        ]);
    }
}
