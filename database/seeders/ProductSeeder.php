<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class ProductSeeder extends Seeder
{
 
    public function run()
    {
        Product::create([
            'name' => 'Nike React Flyknit',
            'price' => '£20',
            'user_id' =>  '1'

        ]);

        Product::create([
            'name' => 'Nike Air Force 1',
            'price' => '£60',
            'user_id' =>  '1'

        ]);
    }
}
