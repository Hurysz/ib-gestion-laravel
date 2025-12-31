<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        \App\Models\Producto::create([
        'nombre' => 'Laptop Gamer IB',
        'descripcion' => 'Procesador i7, 16GB RAM',
        'precio' => 3500.00,
        'stock' => 10
    ]);
    }
}
