<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PortalController extends Controller
{
    public function index(){
        $pagina = 'HOME'; 
        return view('portal.index', compact('pagina'));
    }
    public function sobreNos(){
        $pagina = 'SOBRE NÓS';
        return view('portal.sobreNos', compact('pagina'));
    }
    public function exames(){
        $pagina = 'EXAMES'; 
        return view('portal.exames', compact('pagina'));
    }
    public function galeria(){
        $pagina = 'GALERIA'; 
        return view('portal.galeria', compact('pagina'));
    }
}
