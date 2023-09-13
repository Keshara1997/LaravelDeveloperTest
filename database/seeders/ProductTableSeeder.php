<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('products')->insert([
            [
                'title' => 'Roast Bread',
                'product_code' => 1,
                'category' => 1,
                'price' => 10,
                'description' => 'Hot Roast Bread',

            ],
            [
                'title' => 'Chocolate Cake',
                'product_code' => 12,
                'category' => 3,
                'price' => 20,
                'description' => 'Hot Chocolate Cake',

            ]
        ]);
    }
}
