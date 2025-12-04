<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CatProSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::insert([
            ['name' => 'Électronique'],
            ['name' => 'Vêtements'],
            ['name' => 'Maison & Décoration'],
            ['name' => 'Sport'],
        ]);
    }
}
