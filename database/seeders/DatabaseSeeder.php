<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;
use Database\Seeders\UserSeeder;




class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        $this->call([            
            ProductSeeder::class,
            UserSeeder::class        
        ]);
    }
}
