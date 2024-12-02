<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Subtema;

class SubtemaSeeder extends Seeder
{
    public function run()
    {
        Subtema::create(['nombre' => 'Ecuaciones Lineales']);
        Subtema::create(['nombre' => 'Cálculo Diferencial']);
        Subtema::create(['nombre' => 'Álgebra']);
        // Agrega más subtemas si lo deseas
    }
}

