<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        Category::create(['nombre' => 'Electrónicos']);
        Category::create(['nombre' => 'Ropa']);
        Category::create(['nombre' => 'Hogar']);
    }
}
