<?php

namespace App\Http\Controllers;

use App\Models\Avaliacao;
use App\Models\Exames;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(){
        $pagina = 'Home'; 
        $exames = Exames::all();
        $avaliacoes = Avaliacao::all();
        return view('portal.index', compact(
            'pagina',
            'exames',
            'avaliacoes'
        ));
    }
    public function sobreNos(){
        $pagina = 'Sobre Nós';
        return view('portal.sobreNos', compact('pagina'));
    }
    public function exames(){
        $pagina = 'Exames';
        $exames = Exames::all();
        return view('portal.exames', compact(
            'pagina',
            'exames'
        ));
    }
    public function galeria(){
        $pagina = 'Galeria';
        $avaliacoes = Avaliacao::all();
        return view('portal.galeria', compact('pagina', 'avaliacoes'));
    }
}
