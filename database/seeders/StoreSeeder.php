<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Store;
use App\Models\User;

class StoreSeeder extends Seeder
{
    public function run(): void
    {
        $sellers = User::where('role', 'seller')->get();

        if ($sellers->count() < 2) {
            $this->command->info('Minimal harus punya 2 user seller');
            return;
        }

        // Seller 1
        Store::create([
            'user_id' => $sellers[0]->id,
            'name' => 'UrbanShoes',
            'logo' => 'store1.png',
            'about' => 'UrbanShoes menjual sepatu modern dan stylish',
            'phone' => '081234567890',
            'city' => 'Malang',
            'address' => 'Jl. Sumbersari No.12',
            'address_id' => null,
            'postal_code' => '65145',
            'is_verified' => true,
        ]);

            // Seller 2
            Store::create([
                'user_id' => $sellers[1]->id,
                'name' => 'SneakerSpace',
                'logo' => 'store2.png',
                'about' => 'SneakerSpace menjual sepatu casual dan sporty',
                'phone' => '089876543210',
                'city' => 'Surabaya',
                'address' => 'Jl. Diponegoro No.22',
                'address_id' => null,
                'postal_code' => '60252',
                'is_verified' => true,
            ]);

        }
    }
