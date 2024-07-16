<?php

namespace Database\Seeders;

use App\Models\Exames;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExamesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Exames::create(['nome' => 'Cardiologista', 'icone' => 'exames/icones/icone-cardiologia.svg']);
        Exames::create(['nome' => 'Dentista', 'icone' => 'exames/icones/icone-dentista.svg']);
        Exames::create(['nome' => 'Vacinação', 'icone' => 'exames/icones/icone-vacinacao.svg']);
        Exames::create(['nome' => 'Medicação', 'icone' => 'exames/icones/icone-medicacao.svg']);
        Exames::create(['nome' => 'Hematologista', 'icone' => 'exames/icones/icone-hematologista.svg']);
        Exames::create(['nome' => 'Internação', 'icone' => 'exames/icones/icone-internacao.svg']);
        Exames::create(['nome' => 'Curativos', 'icone' => 'exames/icones/icone-curativos.svg']);
        Exames::create(['nome' => 'Ortopedista', 'icone' => 'exames/icones/icone-ortopedista.svg']);
    }
}
