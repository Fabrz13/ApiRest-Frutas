<?php

namespace Database\Seeders;

use App\Models\Categoria;
use Illuminate\Database\Seeder;

class CategoriasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categoria::create(['nombre' => 'Tropicales']);
        Categoria::create(['nombre' => 'Cítricas']);
        Categoria::create(['nombre' => 'Frutos del bosque']);
    }
}
