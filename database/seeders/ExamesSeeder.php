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
        Exames::create(['id' => '1', 'nome' => 'Cardiologista', 'icone' => '/img/icones/icone-cardiologia.svg']);
    }
}
