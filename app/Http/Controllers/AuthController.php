<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login(){
        $pagina = 'Login';
        return view('login', compact('pagina'));
    }
}
