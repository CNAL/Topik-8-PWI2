<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CelestialShopSeeder extends Seeder
{
    public function run(): void
    {
        $products = [
            ['Algoritma dan Pemrograman', 4, 30000, 'VS Code'],
            ['Aljabar Linear Elementer', 2, 30000, 'Matematika'],
            ['Aplikasi Perkantoran', 2, 20000, 'MS Office'],
            ['Bahasa Indonesia', 2, 20000, 'Bahasa'],
            ['Bahasa Inggris', 2, 20000, 'Bahasa'],
            ['Desain Pengalaman Pengguna', 2, 30000, 'Figma'],
            ['Internalisasi Budaya dan Pembentukan Karakter', 1, 50000, 'Karakter'],
            ['Konten Digital 2D', 3, 30000, 'Photoshop'],
            ['Konten Digital 3D', 3, 30000, 'Blender'],
            ['Literasi Data', 2, 20000, 'Data'],
            ['Matematika Diskrit', 3, 20000, 'Matematika'],
            ['Sistem dan Jaringan Komputer', 4, 40000, 'Komputer'],
            ['Statistika', 2, 10000, 'Data'],
        ];

        DB::transaction(function () use ($products) {
            DB::table('category_product')->insertOrIgnore([
                'id_category' => 1,
                'category_name' => 'Mata Kuliah',
                'description' => 'Produk mata kuliah Celestial Shop',
                'created_at' => now(),
                'updated_at' => now(),
            ]);

            Product::query()->delete();

            foreach ($products as [$name, $stock, $price, $description]) {
                Product::create([
                    'name_product' => $name,
                    'stock_product' => $stock,
                    'price_product' => $price,
                    'desc_product' => $description,
                    'id_category' => 1,
                ]);
            }
        });
    }
}
