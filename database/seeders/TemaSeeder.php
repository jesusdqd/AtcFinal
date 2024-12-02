<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Tema;

class TemaSeeder extends Seeder
{
    public function run()
    {
        Tema::create(['nombre' => 'Matemáticas']);
        Tema::create(['nombre' => 'Física']);
        Tema::create(['nombre' => 'Química']);
        // Agrega más temas si lo deseas
    }
}
