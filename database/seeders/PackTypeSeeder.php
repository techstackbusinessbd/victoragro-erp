<?php

namespace Database\Seeders;

use App\Models\PackType;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PackTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PackType::insert([
            ['name' => 'Bottle'],
            ['name' => 'Box'],
            ['name' => 'Carton'],
        ]);
    }
}
