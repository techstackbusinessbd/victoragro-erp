<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'code' => 'P001',
            'name_en' => 'Power Plus',
            'name_bn' => 'পাওয়ার প্লাস',
            'scientific_name' => 'Chlorpyrifos',
            'manufacture_company' => 'AgroChem Ltd.',
            'category_id' => 1,
            'type_id' => 1,
            'size' => '500',
            'unit_id' => 1,
            'pack_qty' => 10,
            'pack_type_id' => 1,
            'pack_size' => '500 ml',
            'image' => null,
            'price' => 150.00,
            'commission' => 5.0,
            'status' => true,
        ]);
    }
}
