<?php

namespace Database\Seeders;

use App\Models\Avaliacao;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AvaliacoesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Avaliacao::create(['nome' => 'Bentu', 'comentario' => 'Me deram um banho muito relaxante', 'nota' => 3.5, 'img_path' => 'Avaliacoes/Fotos/foto-cachorro.webp']);
    }
}
