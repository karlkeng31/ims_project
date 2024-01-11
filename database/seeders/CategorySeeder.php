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
                'created_at' => now()
            ],
            [
                'name' => 'Smartphones',
                'slug' => 'smartphones',
                'created_at' => now()
            ],
            [
                'name' => 'Speakers',
                'slug' => 'speakers',
                'created_at' => now()
            ],
            [
                'name' => 'Computers',
                'slug' => 'computers',
                'created_at' => now()
            ],
            [
                'name' => 'Televisions',
                'slug' => 'televisions',
                'created_at' => now()
            ]
        ]);

        $categories->each(function ($category) {
            Category::insert($category);
        });
    }
}
