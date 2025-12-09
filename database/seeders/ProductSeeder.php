<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use Illuminate\Support\Str;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        // Sneakers (product_category_id = 1)
        Product::create([
            'store_id' => 1,
            'product_category_id' => 1,
            'name' => 'Nike Air Force 1',
            'slug' => Str::slug('Nike Air Force 1'),
            'description' => 'Sneakers klasik yang cocok untuk gaya kasual.',
            'condition' => 'new',
            'price' => 1500000,
            'weight' => 900,
            'stock' => 10,
        ]);

        Product::create([
            'store_id' => 1,
            'product_category_id' => 1,
            'name' => 'Adidas Stan Smith',
            'slug' => Str::slug('Adidas Stan Smith'),
            'description' => 'Sneakers minimalis dengan desain ikonik.',
            'condition' => 'new',
            'price' => 1400000,
            'weight' => 850,
            'stock' => 12,
        ]);

        // Sepatu Formal (product_category_id = 2)
        Product::create([
            'store_id' => 1,
            'product_category_id' => 2,
            'name' => 'Bata Oxford Classic',
            'slug' => Str::slug('Bata Oxford Classic'),
            'description' => 'Sepatu formal dengan desain Oxford elegan.',
            'condition' => 'new',
            'price' => 850000,
            'weight' => 750,
            'stock' => 8,
        ]);

        Product::create([
            'store_id' => 1,
            'product_category_id' => 2,
            'name' => 'Clarks Men Leather Formal',
            'slug' => Str::slug('Clarks Men Leather Formal'),
            'description' => 'Sepatu kulit formal yang nyaman untuk dipakai sepanjang hari.',
            'condition' => 'new',
            'price' => 1200000,
            'weight' => 820,
            'stock' => 6,
        ]);

        // Running Shoes (product_category_id = 3)
        Product::create([
            'store_id' => 1,
            'product_category_id' => 3,
            'name' => 'Asics Gel Kayano',
            'slug' => Str::slug('Asics Gel Kayano'),
            'description' => 'Running shoes premium dengan cushioning maksimal.',
            'condition' => 'new',
            'price' => 1800000,
            'weight' => 700,
            'stock' => 10,
        ]);

        Product::create([
            'store_id' => 1,
            'product_category_id' => 3,
            'name' => 'Nike Pegasus 40',
            'slug' => Str::slug('Nike Pegasus 40'),
            'description' => 'Sepatu lari yang ringan dan responsif.',
            'condition' => 'new',
            'price' => 1700000,
            'weight' => 680,
            'stock' => 12,
        ]);

        // Basketball Shoes (product_category_id = 4)
        Product::create([
            'store_id' => 1,
            'product_category_id' => 4,
            'name' => 'Nike Lebron Witness',
            'slug' => Str::slug('Nike Lebron Witness'),
            'description' => 'Sepatu basket dengan support kuat dan stabil.',
            'condition' => 'new',
            'price' => 1600000,
            'weight' => 1000,
            'stock' => 7,
        ]);

        Product::create([
            'store_id' => 1,
            'product_category_id' => 4,
            'name' => 'Adidas Dame 8',
            'slug' => Str::slug('Adidas Dame 8'),
            'description' => 'Sepatu basket nyaman dengan grip yang baik.',
            'condition' => 'new',
            'price' => 1500000,
            'weight' => 950,
            'stock' => 9,
        ]);

        // Boots (product_category_id = 5)
        Product::create([
            'store_id' => 1,
            'product_category_id' => 5,
            'name' => 'Dr. Martens 1460',
            'slug' => Str::slug('Dr. Martens 1460'),
            'description' => 'Boots legendaris berbahan kulit premium.',
            'condition' => 'new',
            'price' => 2400000,
            'weight' => 1200,
            'stock' => 5,
        ]);

        Product::create([
            'store_id' => 1,
            'product_category_id' => 5,
            'name' => 'Timberland Classic Boot',
            'slug' => Str::slug('Timberland Classic Boot'),
            'description' => 'Boots tangguh dengan daya tahan tinggi.',
            'condition' => 'new',
            'price' => 2600000,
            'weight' => 1250,
            'stock' => 4,
        ]);
    }
}
