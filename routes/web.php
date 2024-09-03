<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamesController;
use App\Http\Controllers\PortalController;
use App\Http\Controllers\PainelController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

//Portal
Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/sobre-nos', [PortalController::class, 'sobreNos'])->name('portal.sobre-nos');
Route::get('/exames', [PortalController::class, 'exames'])->name('portal.exames');
Route::get('/galeria',  [PortalController::class, 'galeria'])->name('portal.galeria');

//Exames
Route::get('/exames/Cardiologista', [ExamesController::class, 'cardiologista'])->name('exames.cardiologista');

Route::get('/registro', function () {
    return view('auth.register');
});

Route::get('/dashboard', [PainelController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/perfil', [ProfileController::class, 'edit'])->name('perfil.edit');
    Route::patch('/perfil', [ProfileController::class, 'update'])->name('perfil.update');
    Route::delete('/perfil', [ProfileController::class, 'destroy'])->name('perfil.destroy');
});

Route::fallback(function () {
    echo 'A rota acessada não existe, <a href="' . route('login') . '">Principal</a> para ir patra a página principal';
});

require __DIR__.'/auth.php';
