<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\ProductImage;

class ProductImageSeeder extends Seeder
{
    public function run(): void
    {
        $images = [
            [1, 'imagesource/nike-air-force-1.png'],
            [2, 'imagesource/adidas-stan-smith.png'],
            [3, 'imagesource/bata-oxford-classic.png'],
            [4, 'imagesource/clarks-men-leather-formal.png'],
            [5, 'imagesource/asics-gel-kayano.png'],
            [6, 'imagesource/nike-pegasus-40.png'],
            [7, 'imagesource/nike-lebron-witness.png'],
            [8, 'imagesource/adidas-dame-8.png'],
            [9, 'imagesource/dr-martens-1460.png'],
            [10, 'imagesource/timberland-classic-boot.png'],
        ];

        foreach ($images as $img) {
            ProductImage::create([
                'product_id' => $img[0],
                'image' => $img[1],
                'is_thumbnail' => true, 
            ]);
        }
    }
}