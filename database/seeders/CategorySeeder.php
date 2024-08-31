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
            ['name' => 'Programming', 'slug' => 'programming'],
            ['name' => 'Web Development', 'slug' => 'web-development'],
            ['name' => 'Database', 'slug' => 'database'],
            ['name' => 'Networking', 'slug' => 'networking'],
            ['name' => 'Security', 'slug' => 'security'],
            ['name' => 'Cloud Computing', 'slug' => 'cloud-computing'],
            ['name' => 'Machine Learning', 'slug' => 'machine-learning'],
            ['name' => 'DevOps', 'slug' => 'devops'],
            ['name' => 'Software Engineering', 'slug' => 'software-engineering'],
            ['name' => 'IT Management', 'slug' => 'it-management'],
        ];

        foreach ($categories as $category) {
            Category::create($category);
        }
    }
}
