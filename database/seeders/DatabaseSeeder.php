<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // $this->call(ProductTableSeeder::class);
        // $this->call(CategoryTableSeeder::class);
        $this->call([
            ProductTableSeeder::class,
            CategoryTableSeeder::class,
        ]);
    }
}
