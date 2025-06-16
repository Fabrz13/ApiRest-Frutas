<?php

namespace Database\Seeders;

use App\Models\Fruta;
use Illuminate\Database\Seeder;
use Carbon\Carbon;

class FrutasTableSeeder extends Seeder
{
    public function run()
    {
        Fruta::create([
            'nombre' => 'Mango',
            'color' => 'amarillo',
            'fecha_cosecha' => Carbon::now(),
            'categoria_id' => 1
        ]);

        Fruta::create([
            'nombre' => 'Naranja',
            'color' => 'naranja',
            'fecha_cosecha' => Carbon::now(),
            'categoria_id' => 2
        ]);

        Fruta::create([
            'nombre' => 'Fresa',
            'color' => 'rojo',
            'fecha_cosecha' => Carbon::now(),
            'categoria_id' => 3
        ]);
    }
}