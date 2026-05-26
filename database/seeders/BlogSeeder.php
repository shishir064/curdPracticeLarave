<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BlogSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            'Image',
            'Title',
            'Description',
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'title' => $category,
                'Description' => $category
            ]);
        }
    }
}
