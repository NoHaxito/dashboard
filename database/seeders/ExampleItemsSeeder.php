<?php

namespace Database\Seeders;

use Database\Seeders\Seeds\ProductSeeder;
use Database\Seeders\Seeds\PaypalProductSeeder;
use Database\Seeders\Seeds\ApplicationApiSeeder;
use Database\Seeders\Seeds\UsefulLinksSeeder;
use Illuminate\Database\Seeder;

class ExampleItemsSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            ProductSeeder::class,
            PaypalProductSeeder::class,
            ApplicationApiSeeder::class,
            UsefulLinksSeeder::class
        ]);

    }
}
