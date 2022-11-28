<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Adds dummy data.
         * Real dummy data will be added.
         */
        \App\Models\Product::factory(10)->create();

        // \App\Models\Product::factory()->create([
        //     'name' => 'Orkide Ayçiçek Yağı Pet 3 L',
        //     'description' => 'Orkide Ayçiçeği Yağı’nı sıcak ve soğuk tüm yemeklerde, kızartmalarda, salatalarda ve hamur işlerinde kullanabilirsiniz.',
        //     'sku' => 'TR-35-004924',
        //     'category' => 'Temel Gıda',
        //     'sub_categories' => 'Sıvı Yağ',
        //     'brand' => 'Orkide',
        //     'stock_amount' => '50',
        //     'stock_type' => 'Adet',
        //     'net_quantity' => '3000',
        //     'quantity_type' => 'ml',
        //     'image' => 'https://images.migrosone.com/sanalmarket/product/04110117/04110117-b0e31e-1650x1650.jpg',
        //     'active' => true,
        // ]);
        // \App\Models\Product::factory()->create([
        //     'name' => 'Orkide Ayçiçek Yağı Pet 5 L',
        //     'description' => 'Orkide Ayçiçeği Yağı’nı sıcak ve soğuk tüm yemeklerde, kızartmalarda, salatalarda ve hamur işlerinde kullanabilirsiniz.',
        //     'sku' => 'TR-35-004923',
        //     'category' => 'Temel Gıda',
        //     'sub_categories' => 'Sıvı Yağ',
        //     'brand' => 'Orkide',
        //     'stock_amount' => '50',
        //     'stock_type' => 'Adet',
        //     'net_quantity' => '5000',
        //     'quantity_type' => 'ml',
        //     'image' => 'https://images.migrosone.com/sanalmarket/product/04110117/04110117-b0e31e-1650x1650.jpg',
        //     'active' => true,
        // ]);
    }
}
