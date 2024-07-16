<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExamesController extends Controller
{  
    public function cardiologista(){
        $pagina = 'CARDIOLOGISTA';
        return view('portal.exames.cardiologista', compact('pagina'));
    }
}
