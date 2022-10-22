<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'name' => 'ExpressJS',
            'slug' => Str::slug('expressjs'),
            'icon' => '#'
        ]);
        Category::create([
            'name' => 'ReactJS',
            'slug' => Str::slug('reactjs'),
            'icon' => '#'
        ]);
        Category::create([
            'name' => 'VueJS',
            'slug' => Str::slug('vuejs'),
            'icon' => '#'
        ]);
        Category::create([
            'name' => 'Laravel',
            'slug' => Str::slug('laravel'),
            'icon' => '#'
        ]);
        Category::create([
            'name' => 'Flutter',
            'slug' => Str::slug('flutter'),
            'icon' => '#'
        ]);
    }
}
