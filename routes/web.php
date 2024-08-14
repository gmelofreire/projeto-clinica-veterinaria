<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ExamesController;
use App\Http\Controllers\PortalController;
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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
