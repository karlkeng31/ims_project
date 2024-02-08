<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Brand;
use App\Models\Customer;
use App\Models\Product;
use App\Models\Supplier;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        /* $this->call([
            UserSeeder::class,
            CategorySeeder::class,
            BrandSeeder::class
        ]); */

        Customer::factory(1000)->create();
        Product::factory(2343)->create();
    }
}
