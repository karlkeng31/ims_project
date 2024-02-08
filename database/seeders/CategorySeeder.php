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
        $categories = collect([
            [
                'name' => 'Laptops',
                'slug' => 'laptops',
                'parent_id' => null,
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Smartphones',
                'slug' => 'smartphones',
                'parent_id' => null,
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Speakers',
                'slug' => 'speakers',
                'parent_id' => null,
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Computers',
                'slug' => 'computers',
                'parent_id' => null,
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Televisions',
                'slug' => 'televisions',
                'parent_id' => null,
                'is_visible' => true,
                'created_at' => now()
            ]
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
