<?php

namespace Database\Seeders;

use App\Models\Topic;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TopicSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Topic::create([
            'name' => 'Automation',
            'slug' => '/' . Str::slug('automation')
        ]);
        Topic::create([
            'name' => 'UI/UX',
            'slug' => '/' . Str::slug('uiux')
        ]);
        Topic::create([
            'name' => 'Workflow',
            'slug' => '/' . Str::slug('workflow')
        ]);
        Topic::create([
            'name' => 'Industrial',
            'slug' => '/' . Str::slug('indusrtial')
        ]);
        Topic::create([
            'name' => 'Flutter',
            'slug' => '/' . Str::slug('flutter')
        ]);
    }
}
