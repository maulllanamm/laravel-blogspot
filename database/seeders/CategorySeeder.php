<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Programming', 'slug' => 'programming', 'color' => 'red'],
            ['name' => 'Web Development', 'slug' => 'web-development', 'color' => 'blue'],
            ['name' => 'Database', 'slug' => 'database', 'color' => 'green'],
            ['name' => 'Networking', 'slug' => 'networking', 'color' => 'yellow'],
            ['name' => 'Security', 'slug' => 'security', 'color' => 'purple'],
            ['name' => 'Cloud Computing', 'slug' => 'cloud-computing', 'color' => 'teal'],
            ['name' => 'Machine Learning', 'slug' => 'machine-learning', 'color' => 'orange'],
            ['name' => 'DevOps', 'slug' => 'devops', 'color' => 'pink'],
            ['name' => 'Software Engineering', 'slug' => 'software-engineering', 'color' => 'indigo'],
            ['name' => 'IT Management', 'slug' => 'it-management', 'color' => 'gray'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
