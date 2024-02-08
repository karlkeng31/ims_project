<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $brands = collect([
            [
                'name' => 'Realme',
                'slug' => 'realme',
                'url' => 'https://www.realme.com/ph/',
                'primary_hex' => '#FFFB00',
                'description' => 'Realme is an emerging smartphone brand which is committed to offering products with powerful performance, stylish design and sincere services.',
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Acer',
                'slug' => 'acer',
                'url' => 'https://www.acer.com/us-en',
                'primary_hex' => '#18FF00',
                'description' => "Acer Inc (Acer) is an information and communication technology company that develops, designs, markets, and exports IT products. The company's product portfolio comprises personal computers, projectors, tablet PCs, smartphones, wearables, smart devices, LCD monitors, servers, and ICT devices.",
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Asus',
                'slug' => 'asus',
                'url' => 'https://www.asus.com/ph/',
                'primary_hex' => '#1B35FF',
                'description' => 'ASUS is a Taiwan-based, multinational computer hardware and consumer electronics company that was established in 1989.',
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Lenovo',
                'slug' => 'lenovo',
                'url' => 'https://www.lenovo.com/ph/en/',
                'primary_hex' => '#FF0000',
                'description' => 'Lenovo is a manufacturer of personal computers, smartphones, televisions, and wearable devices. ',
                'is_visible' => true,
                'created_at' => now()
            ],
            [
                'name' => 'Apple',
                'slug' => 'apple',
                'url' => 'https://www.apple.com/ph/',
                'primary_hex' => '#FFFFFF',
                'description' => 'Apple Inc. designs, manufactures and markets smartphones, personal computers, tablets, wearables and accessories, and sells a variety of related services.',
                'is_visible' => true,
                'created_at' => now()
            ]
        ]);

        $brands->each(function ($brand) {
            Brand::insert($brand);
        });
    }
}
