<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PraktikumSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('category_product')->insert([
            ['id_category' => 1, 'category_name' => 'Makanan US', 'description' => 'Makanan khas Amerika', 'created_at' => now()],
            ['id_category' => 2, 'category_name' => 'Makanan Asia', 'description' => 'Makanan khas Asia', 'created_at' => now()],
            ['id_category' => 3, 'category_name' => 'Makanan Ringan', 'description' => 'Makanan ringan', 'created_at' => now()],
        ]);

        $faker = \Faker\Factory::create('en_US');
        $names = ['Little Bacon Burger', 'Little Hamburger', 'Bacon Burger', 'Grilled Cheese', 'Pasta', 'Cheese Dog', 'Hamburger', 'Cheeseburger', 'French Fries', 'Sandwich'];
        foreach ($names as $index => $name) {
            DB::table('products')->insert([
                'name_product' => $name,
                'stock_product' => $faker->numberBetween(1, 50),
                'price_product' => $index === 0 ? 96000 : $faker->numberBetween(5, 100) * 1000,
                'desc_product' => $faker->randomElement(['Saus tomat', 'Saus keju', 'Saus lada hitam', 'Saus barbeque']),
                'id_category' => $faker->numberBetween(1, 3),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
