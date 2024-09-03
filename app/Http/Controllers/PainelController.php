<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PainelController extends Controller
{
    public function index()
    {
        $pagina = "Dashboard";
        return view('painel.dashboard', compact(
            'pagina',
        ));
    }


    
}
