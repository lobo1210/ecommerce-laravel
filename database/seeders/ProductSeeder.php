<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Producto;

class ProductSeeder extends Seeder
{
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {

            Producto::create([
                'nombre' => 'Producto '.$i,
                'descripcion' => 'Descripción del producto '.$i,
                'precio' => rand(100, 500),
                'activo' => true,
                'category_id' => rand(1,3)
            ]);
        }
    }
}