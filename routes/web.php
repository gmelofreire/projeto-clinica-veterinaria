<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PortalController;
use Illuminate\Support\Facades\Route;

//Portal
Route::get('/', [PortalController::class, 'index'])->name('portal.index');
Route::get('/sobre-nos', [PortalController::class, 'sobreNos'])->name('portal.sobre-nos');
Route::get('/exames', [PortalController::class, 'exames'])->name('portal.exames');
Route::get('/galeria',  [PortalController::class, 'galeria'])->name('portal.galeria');

//Login
Route::get('/login',  [AuthController::class, 'login'])->name('portal.login');


