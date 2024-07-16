<?php

namespace App\Http\Controllers;

use App\Models\Exames;
use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(){
        $pagina = 'HOME'; 
        $exames = Exames::all();
        return view('portal.index', compact(
            'pagina',
            'exames'
        ));
    }
    public function sobreNos(){
        $pagina = 'SOBRE NÓS';
        return view('portal.sobreNos', compact('pagina'));
    }
    public function exames(){
        $pagina = 'EXAMES';
        $exames = Exames::all();
        return view('portal.exames', compact(
            'pagina',
            'exames'
        ));
    }
    public function galeria(){
        $pagina = 'GALERIA'; 
        return view('portal.galeria', compact('pagina'));
    }
}
